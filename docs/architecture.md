# System Architecture — Skills Bot + AI Agent + Application

Three cooperating components keep the contemporaneous records complete, audited, and inspection-ready, and keep the dashboard live.

```
        ┌────────────────────────┐        ┌──────────────────────────┐        ┌───────────────────────────┐
        │   HOST APPLICATION(S)  │  HTTP  │     AI AGENT (Laravel)   │   API  │      R&D SKILLS BOT        │
        │  any Laravel-based app │ ─────▶ │  rd-compliance-agent     │ ─────▶ │  records manager + dash    │
        │  + connectors:         │        │  • classify              │        │  • lanes (run-sheets,      │
        │   task mgmt            │        │  • audit (ALCOA+)        │        │    studies, timesheets,    │
        │   timesheet control   │        │  • route to lanes        │        │    documents, reports,     │
        │   document centre      │        │  • interface boundary    │        │    financials, accounting) │
        │   reports folders      │ ◀───── │                          │ ◀───── │  • compliance framework    │
        │   financials folder    │  pull  │  artisan: audit, sync-ato│ refresh│  • dashboard + integrity   │
        │   accounting review    │        └──────────────────────────┘        │  • daily skill-building    │
        └────────────────────────┘                                            └───────────────────────────┘
                                                                                        │
                                                                                        ▼
                                                                         Inspector / Auditor review (read-only)
```

## Component responsibilities

### 1. R&D Skills Bot (system of record)
- Owns the contemporaneous records: learning log, run sheets, hypothesis studies, weekly reports, control register, integrity hashes, and the dashboard.
- Runs the **daily skill-building** (the existing scheduled curriculum) and updates records as it works.
- Continuously updates the **regulatory/compliance framework** (consumes ATO schedule metadata from the agent).
- Exposes lanes the agent files into and a `dashboard/refresh` endpoint.

### 2. AI Agent (the interface — this is the Laravel package `agent/`)
- The boundary between any host **Application server** and the Skills Bot. "Plug into any app with Laravel support."
- **Reviews** incoming data records, **classifies** them, runs an **ALCOA+-aligned audit** (date/source/author present; no future dates), and **routes** each into the correct skills-manager lane for Inspector/Auditor review.
- Pulls from connectors and pushes to the bot; triggers dashboard refresh; syncs the latest ATO schedule.

### 3. Host Application(s) + connectors
- Any Laravel app. Binds concrete **connectors** (adapters) per integrated system:
  - **Task management** → task-board lane (Kanban cards)
  - **Timesheet control** → timesheets lane (effort/evidence for R&D expenditure)
  - **Document centre review** → document-centre lane
  - **Reports folders** → reports lane
  - **Financials folder** → financials lane
  - **Accounting review** → accounting lane (R&D expenditure for the ATO schedule)
- Connectors normalise each system's payload into the agent's canonical record shape, so the agent stays application-agnostic.

## Data flow (one cycle)
1. Host app (or `rd-agent:audit`) sends data points to the agent.
2. Agent classifies → audits → routes each to a lane; flags incomplete records `needs_attention`, complete ones `ready_for_inspector`.
3. Skills Bot stores them, recomputes integrity, and refreshes the dashboard.
4. `rd-agent:sync-ato` weekly fetches the latest ATO R&D Tax Incentive Schedule and updates the compliance panel.
5. Inspector/Auditor reviews lanes via the dashboard; nothing is auto-lodged.

## Trust & safety boundaries
- The agent **organises and audits evidence**; it does **not** make R&D-eligibility determinations, give tax advice, or lodge anything with the ATO.
- Ingest API is token-protected; the bot client is keyed.
- Human Inspector/Auditor sign-off remains the control point. See `compliance-mapping.md`.
