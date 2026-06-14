# Control Register & R&D Inspector's Index

**Purpose.** This is the single entry point and control document for the skill-builder contemporaneous records. It governs the evidence chain end-to-end — **Hypothesis Study → Run Sheets → Weekly Report → Learning Log → source session** — so an R&D inspector (e.g. AusIndustry under ITAA 1997 s 355-25) can trace any claim of activity to its dated, hashed evidence and see what is open, confirmed, or unverifiable.

**Compiled:** 2026-06-15 (reconstructive — see Provenance). **Owner:** daily-skill-builder-rd-records (for Leonardo).

---

## 1. How to read these records (for an inspector)

The s 355-25 systematic-progression test (hypothesis → experiment → observation/evaluation → conclusion) is applied at two levels:

- **Run sheet** = one session's systematic progression. Each `run-sheets/RUN-0NN-*.md` states that session's working hypothesis, the activity/experiment, the observation/evaluation, the conclusion, and the next working hypothesis. Every run sheet names the **Hypothesis Study** it feeds.
- **Hypothesis Study** = a multi-session inquiry. Each `hypothesis-studies/HS-2026-NN.md` carries the master hypothesis, the ordered progression across its run sheets, the evaluation, and stopping criteria.
- **Weekly report** = `weekly-reports/*.md`, the synthesis rolling up each week's run sheets.
- **Learning log** = `learning-log.md`, the full chronological chain.

Integrity: SHA-256 hashes for every file are in `run-sheets/INDEX.md`; the git history and `archive/skill-records.bundle` are the immutable trail.

---

## 2. Hypothesis control table (the "task manager")

Each study is a controlled item. Status drives the next action; an inspector reads this table top-down to see the state of every line of inquiry.

| Study | Master hypothesis (abбreviated) | Status | Contributing run sheets | Rolls up into | Stopping criterion / next action (open task) |
|---|---|---|---|---|---|
| **HS-2026-01** | ALCOA+ governs record integrity; Contemporaneous is load-bearing & irreparable | **Open — foundations CONFIRMED; repetitive** | RUN-002, 003, 005, 006*, 011, 012, 014, 015 | week-01, week-02, week-03 | Close foundational arc; open new study on 21 CFR Part 11 audit-trail mechanics & chain-of-custody instead of re-confirming basics |
| **HS-2026-02** | Contemporaneous, witnessed, tamper-resistant records convert claimed work into legal evidence | **Open — early** | RUN-001, 008 | week-01, week-02 | Add sessions on chain-of-custody, litigation hold/spoliation, inventorship-in-dispute before closing |
| **HS-2026-03** | R&D is governed at portfolio + project levels; single-metric selection underperforms | **Open — developing** | RUN-007, 010, 013, 016 | week-02, week-03 | Add roadmapping, R&D metrics/productivity (Stevens), IP strategy before closing synthesis |

\* RUN-006 is a partial run (lesson not recoverable); tentatively mapped to HS-2026-01 pending content recovery.

---

## 3. Full traceability matrix (run sheet → study → report → source)

| Run sheet | Date | Track | Status | Study | Weekly report | Source session |
|---|---|---|---|---|---|---|
| RUN-001 | 2026-05-29 (stated) | CR | Genuine | HS-2026-02 | week-01 | 01e8df07 |
| RUN-002 | 2026-05-30 (inf.) | CR | Genuine | HS-2026-01 | week-01 | 6be6d7d2 |
| RUN-003 | 2026-05-31 (inf.) | CR | Genuine | HS-2026-01 | week-01 | e13edf74 |
| RUN-004 | 2026-06-01 (inf.) | — | Non-lesson | — | week-02 | 64309f67 |
| RUN-005 | 2026-06-02 (inf.) | CR | Genuine | HS-2026-01 | week-02 | 0dcf4a12 |
| RUN-006 | 2026-06-03 (inf.) | CR | Partial | HS-2026-01* | week-02 | 7f37f667 |
| RUN-007 | 2026-06-04 (inf.) | RD | Genuine | HS-2026-03 | week-02 | bb84cb72 |
| RUN-008 | 2026-06-05 (inf.) | CR | Genuine | HS-2026-02 | week-02 | 1543df0f |
| RUN-009 | 2026-06-06 (inf.) | — | Null (API) | — | week-02 | 755c7bef |
| RUN-010 | 2026-06-07 (inf.) | RD | Genuine | HS-2026-03 | week-02 | e344b388 |
| RUN-011 | 2026-06-08 (stated) | CR | Genuine | HS-2026-01 | week-03 | 6b2f933f |
| RUN-012 | 2026-06-09 (inf.) | CR | Genuine | HS-2026-01 | week-03 | 9a60dd91 |
| RUN-013 | 2026-06-10 (inf.) | RD | Genuine | HS-2026-03 | week-03 | 057c7fef |
| RUN-014 | 2026-06-11 (inf.) | CR | Genuine | HS-2026-01 | week-03 | cc49e64d |
| RUN-015 | 2026-06-13 (stated) | CR | Genuine | HS-2026-01 | week-03 | 2fbb9702 |
| RUN-016 | 2026-06-14 (stated) | RD | Genuine | HS-2026-03 | week-03 | current |

Weekly reports: week-01 = `weekly-reports/2026-05-31-week-01.md`; week-02 = `…/2026-06-07-week-02.md`; week-03 = `…/2026-06-14-week-03.md`.

---

## 4. Coverage & integrity summary

- **16 scheduled runs** documented (29 May – 14 Jun 2026): **13 genuine**, **1 partial** (RUN-006), **2 non-productive** (RUN-004 advisory, RUN-009 null API error).
- Every genuine lesson is mapped to a Hypothesis Study and a weekly report; non-productive runs are recorded, not omitted.
- **Dating:** stated for RUN-001, 011, 015, 016; all others inferred from session order (±1 day). Apparent one-day gap on 2026-06-12.
- **Known control issue:** prior-run detection repeatedly failed (RUN-006/014 each self-declared "Session 1"; RUN-010/013 each "Day 1"), causing ALCOA+ over-coverage. Remediation: this register is now the single source of truth for progression so future runs build forward rather than repeat.

## 5. Provenance
Reconstructive compilation built 2026-06-15 from verified session transcripts; openly flagged, not backdated. Going forward, each run sheet and this register should be updated on the session day to keep the chain fully contemporaneous.
