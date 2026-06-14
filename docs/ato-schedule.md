# ATO R&D Tax Incentive Schedule — latest located file

Captured by the agent's `rd-agent:sync-ato` command. Snapshot located 2026-06-15.

| Field | Value |
|---|---|
| Schedule | **Research and development tax incentive schedule 2026** |
| Instructions | *Instructions to complete the R&D tax incentive schedule 2026* |
| ATO QC id | **QC107004** |
| Last updated (ATO) | **30 May 2026** |
| Feeds | **item 21** of the *Company tax return 2026* (**NAT 0656**) |
| URL | https://www.ato.gov.au/forms-and-instructions/research-and-development-tax-incentive-schedule-2026-instructions/instructions-to-complete-the-rd-tax-incentive-schedule-2026 |

## Schedule structure (the parts the accounting lane must populate)
- **Preliminary** — Company tax return Item 6 label Q (Total expenses); Item 7 label D (accounting expenditure subject to R&DTI).
- **Part A** — Calculation of notional R&D deduction. Eligibility floor: **total notional deductions ≥ $20,000** (exceptions: Research Service Provider expenditure; CRC monetary contributions).
- **Part B** — Clawback amounts (feedstock adjustments, recoupments, assessable balancing adjustments) + balancing-adjustment catch-up deduction.
- **Part C** — R&D expenditure to associates (only deductible in the year **paid**).
- **Part D** — Aggregated turnover (refundable vs non-refundable offset; 50% exempt-entity control test).
- **Part E** — R&D tax offset calculation.

## Key statutory points the framework tracks
- **ITAA 1997 Division 355** — the R&DTI regime; s 355-25 (core), s 355-30 (supporting), s 355-405 ('at risk'), s 355-415 (intra-group mark-ups), subdiv 355-E (depreciating assets).
- **TR 2021/5** — the 'at risk' rule. **TA 2023/5** — overseas activities for foreign related entities.
- **IR&D Act 1986** — registration with DISR/AusIndustry (incl. overseas & core-technology findings); RSP registration.
- Exclusions: building expenditure, interest, core technology; GST input-tax-credit adjustment (Div 27).

## How the agent keeps this current
`php artisan rd-agent:sync-ato` (weekly) fetches the instructions page, records the `Last updated` date + a SHA-256 of the page, caches it to `storage/app/rd-agent/ato-schedule.json`, and pushes the metadata to the Skills Bot's compliance panel. If the ATO publishes a newer year (e.g. 2027), update `RD_ATO_YEAR` / the configured URL and re-run.

> Not tax or legal advice. The ATO page is the authority; this is a tracking aid for evidence assembly.

## Re-verification log
- **2026-06-15** (weekly audit): instructions page re-fetched from ato.gov.au; `Last updated` still **30 May 2026**, QC **107004** unchanged, item 21 / NAT 0656 confirmed. No change to this file's substance.
