# rd-compliance-agent (Laravel package)

The **AI Agent** that plugs into any Laravel-supported application, reviews data records, and routes them into the correct areas of the R&D **Skills Manager** for **Inspector/Auditor** review — working in sync with the **R&D Skills Bot** (the records/dashboard backend).

```
Host Application  ──HTTP──▶  AI Agent (this package)  ──▶  Skills Bot (records + dashboard)
(any Laravel app)            classify · audit · route        run-sheets / studies / timesheets
                                                              documents / reports / financials
                                                              accounting · ATO schedule · dashboard
```

## Install
```bash
composer require fleetpass/rd-compliance-agent
php artisan vendor:publish --tag=rd-agent-config
```
Set in `.env`:
```
RD_AGENT_TOKEN=...            # shared secret the host app sends as Bearer
RD_SKILLS_BOT_URL=https://...
RD_SKILLS_BOT_KEY=...
RD_ATO_YEAR=2026
```

## What it does
- **Ingest API** (`POST /api/rd-agent/ingest`, `/ingest/batch`) — the host app pushes data points; the agent classifies, audits (ALCOA+-aligned: date/source/author/no-future-dates), and files them into the right lane.
- **RecordRouter** — maps each record kind to a skills-manager lane (task→task-board, timesheet→timesheets, document→document-centre, report→reports, financial→financials, accounting→accounting, experiment→run-sheets, hypothesis→hypothesis-studies).
- **Connectors** — adapters per external system (task mgmt, timesheet, document centre, reports, financials, accounting). Ships with `NullConnector`; bind real ones (Asana/Harvest/SharePoint/Xero/MYOB…) in the host app — keeps the agent application-agnostic.
- **Artisan commands**
  - `php artisan rd-agent:audit` — pull from all connectors, review/audit, route, refresh dashboard. Schedule daily.
  - `php artisan rd-agent:sync-ato` — fetch the latest ATO R&D Tax Incentive Schedule and update the compliance framework. Schedule weekly.

## Scheduling (host app `app/Console/Kernel.php`)
```php
$schedule->command('rd-agent:audit')->dailyAt('17:30');
$schedule->command('rd-agent:sync-ato')->weeklyOn(1, '06:00');
```

> The agent never makes eligibility determinations or lodges anything with the ATO — it organises evidence and keeps the dashboard/compliance panel current for human Inspector/Auditor review. Not tax or legal advice.
