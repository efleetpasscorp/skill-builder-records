# Skill-Builder Contemporaneous Records

Record-keeping repository for Leonardo's daily skill-builder curriculum, covering two tracks — **R&D Management** and **Contemporaneous Records**. The trail is kept as a **Systematic Progression of Work (SPW)** so it is defensible under the same contemporaneous-documentation logic AusIndustry applies to R&D core-activity continuity (ITAA 1997 s 355-25): a dated chain of entries, each session evidenced by a run sheet, aggregated into weekly syntheses.

## Repository layout

```
.
├── README.md                  Overview, provenance, integrity (this file)
├── learning-log.md            Full chronological SPW log — one entry per session
├── run-sheets/                Per-session evidentiary run sheets
│   ├── INDEX.md               Master index + integrity hashes + dating notes
│   └── RUN-0NN-YYYY-MM-DD.md  One per session (incl. null/partial runs)
├── weekly-reports/            Weekly synthesis reports
│   ├── 2026-05-31-week-01.md
│   ├── 2026-06-07-week-02.md
│   └── 2026-06-14-week-03.md
├── curriculum/
│   └── curriculum-map.md      Tracks, topics covered, progression, known gaps
├── docs/
│   └── maintenance.md         How records are produced and pushed
└── archive/
    └── skill-records.bundle   Portable git bundle (full history, clonable)
```

## Coverage

Sixteen scheduled runs are documented (29 May – 14 June 2026): **13 genuine lessons**, **2 null runs** (one API error, one non-lesson advisory session), and **1 partial run** (lesson produced but not recoverable from the transcript). Null and partial runs are recorded rather than omitted — an honestly documented gap is a legitimate record; a fabricated one is not.

## Provenance & integrity

This repository was compiled on 2026-06-15 by reading the saved transcripts of the prior scheduled runs. It is therefore a **reconstructive** compilation, openly flagged as such, not a set of entries written live on each session day. Dating rules:

- **Stated dates** (verbatim in the transcript): 29 May, 8 June, 13 June, 14 June 2026.
- **Inferred dates**: all others, assigned by session-history ordering assuming the documented ~daily 17:30 cadence. Every inferred date is flagged `(inferred)` in its run sheet and in `run-sheets/INDEX.md`, and may be off by ±1 day. There appears to be one unfilled day between the 8 June and 13 June anchors (see INDEX).

Content-integrity hashes for every file are listed in `run-sheets/INDEX.md`. The git commit history (and the bundle in `archive/`) provide the authoritative immutable audit trail.

> Going forward, filing each run sheet on its own session day would make the chain fully contemporaneous rather than reconstructed.
