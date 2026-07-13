# Skill-Builder Contemporaneous Records

Record-keeping repository for Leonardo's daily skill-builder curriculum, covering two tracks — **R&D Management** and **Contemporaneous Records**. The trail is kept as a **Systematic Progression of Work (SPW)** so it is structured for an R&D inspector to review under the same logic AusIndustry applies to R&D core-activity continuity (**ITAA 1997 s 355-25**): a dated chain of entries, each session evidenced by a run sheet, hypotheses aggregated into studies, weeks rolled into syntheses.

## Start here (for an inspector)
**`CONTROL-REGISTER.md`** is the single entry point: it governs the hypotheses, maps every run sheet to its Hypothesis Study and weekly report, tracks open/confirmed lines of inquiry, and lists coverage, dating, and integrity. Read it first.

## Repository layout

```
.
├── README.md                    Overview (this file)
├── CONTROL-REGISTER.md          Master control + traceability + inspector index  ← start here
├── learning-log.md              Full chronological SPW log (one entry per session)
├── run-sheets/                  Per-session evidentiary run sheets (4-phase hypothesis work)
│   ├── INDEX.md                 Index, study links, integrity hashes, dating notes
│   └── RUN-0NN-YYYY-MM-DD.md    One per session (incl. null/partial)
├── hypothesis-studies/          Multi-session inquiries (the controlled hypotheses)
│   ├── INDEX.md
│   └── HS-2026-NN.md
├── weekly-reports/              Weekly syntheses (week-01 … week-07)
├── curriculum/
│   └── curriculum-map.md        Tracks, progression, study mapping, known gaps
├── docs/
│   ├── maintenance.md           How records are produced and pushed
│   └── compliance-mapping.md    Mapping to R&DTI legislation & ATO/AusIndustry requirements
└── archive/
    └── skill-records.bundle     Portable git bundle (full history, clonable)
```

## The evidence chain
**Hypothesis Study → Run Sheets → Weekly Report → Learning Log → source session.** Each run sheet carries the four statutory phases (hypothesis → experiment → observation/evaluation → conclusion) and names the study it feeds; `CONTROL-REGISTER.md` holds the full traceability matrix.

## Coverage
Forty-three scheduled runs (29 May – 12 July 2026): **40 genuine lessons**, **2 non-productive** (RUN-004 advisory, RUN-009 null API error), **1 partial** (RUN-006). Null/partial runs are recorded, not omitted. *Weeks 04–05 re-taught foundations in all 14 sessions. Week-06 split: RUN-034 (2 Jul) is the only session to detect its history and advance (R&D metrics). Week-07 (6–12 Jul, complete 7-session week) fully regressed — 5 ALCOA+ repeats + portfolio + Stage-Gate, two partial detections, no advance — see `CONTROL-REGISTER.md` §4 and the weekly syntheses.*

## Regulatory basis
The record structure is aligned to **ITAA 1997 ss 355-25 / 355-30** and AusIndustry's *Guide to Interpretation* and *Software-related activities* guide; substantiation/retention reflects **ITAA 1936 s 262A**. See `docs/compliance-mapping.md`. Format alignment does not assert the learning activity is itself eligible R&D — that is a separate, facts-based assessment. Not tax or legal advice.

## Provenance & integrity
Reconstructive compilation built 2026-06-15 from verified session transcripts — openly flagged, not backdated; weeks 04–07 (RUN-017…043) filed reconstructively at the 2026-06-22, 2026-06-30, 2026-07-06 and 2026-07-13 audits. Stated + weekday-correct dates: 29 May, 8/13/14/15/16/22/25/26/28/30 Jun, 2/7 Jul; RUN-022 states 20 Jun but mislabels the weekday; RUN-026 states 24 Jun without a weekday; all others inferred (±1 day; apparent gaps 12 Jun and one indeterminable day in 3–5 Jul — the previously flagged 29 Jun gap is corrected: RUN-031 fills it). SHA-256 hashes in `run-sheets/INDEX.md`; git history and the bundle are the immutable trail. Going forward, filing each run sheet on its own session day makes the chain fully contemporaneous.

## System: Skills Bot + AI Agent + Application
Beyond the records, this repo ships the automation that keeps them current and inspection-ready:
- **`agent/`** — `rd-compliance-agent`, a Laravel-installable **AI Agent** that plugs into any host application, reviews/audits data records (ALCOA+-aligned), and routes them into the correct skills-manager lane for Inspector/Auditor review. It is the interface between the application server and the **R&D Skills Bot**.
- **R&D Skills Bot** — the records/dashboard backend that runs the daily skill-building, keeps the compliance framework current, and refreshes the dashboard.
- **`docs/architecture.md`** — how the three components and the connectors (task mgmt, timesheet, document centre, reports, financials, accounting) fit together.
- **`docs/ato-schedule.md`** — the latest located ATO R&D Tax Incentive Schedule (2026, QC107004) and how `rd-agent:sync-ato` keeps it current.

The **Architecture** tab on the dashboard visualises this. The agent organises and audits evidence only — it makes no eligibility determinations and lodges nothing with the ATO. Not tax or legal advice.
