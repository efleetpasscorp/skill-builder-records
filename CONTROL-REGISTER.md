# Control Register & R&D Inspector's Index

**Purpose.** This is the single entry point and control document for the skill-builder contemporaneous records. It governs the evidence chain end-to-end — **Hypothesis Study → Run Sheets → Weekly Report → Learning Log → source session** — so an R&D inspector (e.g. AusIndustry under ITAA 1997 s 355-25) can trace any claim of activity to its dated, hashed evidence and see what is open, confirmed, or unverifiable.

**Compiled:** 2026-06-15 (reconstructive — see Provenance). **Last automated audit:** 2026-07-13 (fifth weekly Skills Bot run; **7 new sessions RUN-037…043** added, 6–12 Jul; full regression after RUN-034 — all foundational repeats; two partial detections — see §6). **Owner:** daily-skill-builder-rd-records (for Leonardo).

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
| **HS-2026-01** | ALCOA+ governs record integrity; Contemporaneous is load-bearing & irreparable | **Open — CONFIRMED; acutely repetitive (20)** | RUN-002, 003, 005, 006*, 011, 012, 014, 015, 018, 022, 024, 025, 028, 029, 033, 037, 040, 041, 042, 043 | week-01…week-07 | Close foundational arc; open new study on 21 CFR Part 11 audit-trail mechanics & chain-of-custody instead of re-confirming basics (all 5 week-07 CR sessions were ALCOA+ repeats — now ~20×) |
| **HS-2026-02** | Contemporaneous, witnessed, tamper-resistant records convert claimed work into legal evidence | **Open — early (starved: no new sessions wk-03…wk-07)** | RUN-001, 008 | week-01, week-02 | Add sessions on chain-of-custody, litigation hold/spoliation, inventorship-in-dispute before closing (untouched 5 weeks) |
| **HS-2026-03** | R&D is governed at portfolio + project levels; single-metric selection underperforms | **Open — developing (19); one advance RUN-034** | RUN-007, 010, 013, 016, 017, 019, 020, 021, 023, 026, 027, 030, 031, 032, 034, 035, 036, 038, 039 | week-02…week-07 | **R&D metrics (Stevens) DONE (RUN-034).** Add roadmapping, managing scientists, IP strategy before closing synthesis (wk-07 RD sessions RUN-038/039 were foundational repeats) |

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
| RUN-016 | 2026-06-14 (stated) | RD | Genuine | HS-2026-03 | week-03 | b20e5834 |
| RUN-017 | 2026-06-15 (stated) | RD | Genuine | HS-2026-03 | week-04 | d9b9a058 |
| RUN-018 | 2026-06-16 (stated) | CR | Genuine | HS-2026-01 | week-04 | 6c5a0477 |
| RUN-019 | 2026-06-17 (inf.) | RD | Genuine | HS-2026-03 | week-04 | f5e2e0c2 |
| RUN-020 | 2026-06-18 (inf.) | RD | Genuine | HS-2026-03 | week-04 | d2f5516d |
| RUN-021 | 2026-06-19 (inf.) | RD | Genuine | HS-2026-03 | week-04 | 78e75dc0 |
| RUN-022 | 2026-06-20 (stated date; weekday mislabeled) | CR | Genuine | HS-2026-01 | week-04 | 5cdfa9f6 |
| RUN-023 | 2026-06-21 (inf.) | RD | Genuine | HS-2026-03 | week-04 | 2a660038 |
| RUN-024 | 2026-06-22 (stated) | CR | Genuine | HS-2026-01 | week-05 | e7e6c0be |
| RUN-025 | 2026-06-23 (inf.; ex. dated 24 Jun) | CR | Genuine | HS-2026-01 | week-05 | 58e4ab91 |
| RUN-026 | 2026-06-24 (stated) | RD | Genuine | HS-2026-03 | week-05 | 6c1b57f6 |
| RUN-027 | 2026-06-25 (stated) | RD | Genuine | HS-2026-03 | week-05 | efe22d34 |
| RUN-028 | 2026-06-26 (stated) | CR | Genuine | HS-2026-01 | week-05 | c0fa03c6 |
| RUN-029 | 2026-06-27 (inf.; ex. dated 27 Jun) | CR | Genuine | HS-2026-01 | week-05 | a4778c36 |
| RUN-030 | 2026-06-28 (stated) | RD | Genuine | HS-2026-03 | week-05 | c5f36137 |
| RUN-031 | 2026-06-29 (inf.) | RD | Genuine | HS-2026-03 | week-06 | 9336445b |
| RUN-032 | 2026-06-30 (stated) | RD | Genuine | HS-2026-03 | week-06 | 380ed7c6 |
| RUN-033 | 2026-07-01 (inf.; corroborated) | CR | Genuine | HS-2026-01 | week-06 | cf246996 |
| RUN-034 | 2026-07-02 (stated) | RD | Genuine — first advance | HS-2026-03 | week-06 | 5cc98e89 |
| RUN-035 | 2026-07-03 (inf. ±1) | RD | Genuine | HS-2026-03 | week-06 | b88f4130 |
| RUN-036 | 2026-07-05 (inf. ±1) | RD | Genuine | HS-2026-03 | week-06 | d62c0a31 |
| RUN-037 | 2026-07-06 (inf.) | CR | Genuine | HS-2026-01 | week-07 | 268af7bf |
| RUN-038 | 2026-07-07 (stated) | RD | Genuine | HS-2026-03 | week-07 | 6053718e |
| RUN-039 | 2026-07-08 (inf.) | RD | Genuine | HS-2026-03 | week-07 | c456604d |
| RUN-040 | 2026-07-09 (inf.; ex. dated 9 Jul) | CR | Genuine | HS-2026-01 | week-07 | 4b843178 |
| RUN-041 | 2026-07-10 (inf.) | CR | Genuine | HS-2026-01 | week-07 | 46bb231a |
| RUN-042 | 2026-07-11 (inf.; ex. dated 11 Jul) | CR | Genuine | HS-2026-01 | week-07 | ffddb0e0 |
| RUN-043 | 2026-07-12 (inf.; ex. dated 12 Jul) | CR | Genuine | HS-2026-01 | week-07 | b9ee97eb |

Weekly reports: week-01 = `weekly-reports/2026-05-31-week-01.md`; week-02 = `…/2026-06-07-week-02.md`; week-03 = `…/2026-06-14-week-03.md`; week-04 = `…/2026-06-21-week-04.md`; week-05 = `…/2026-06-28-week-05.md`; week-06 = `…/2026-07-05-week-06.md`; week-07 = `…/2026-07-12-week-07.md`.

---

## 4. Coverage & integrity summary

- **43 scheduled runs** documented (29 May – 12 Jul 2026): **40 genuine**, **1 partial** (RUN-006), **2 non-productive** (RUN-004 advisory, RUN-009 null API error). **Correction:** the 30 Jun audit's "apparent gap 29 Jun" is withdrawn — RUN-031 (session 9336445b) fills it; it existed but was not detected then. One indeterminable gap day remains in 3–5 Jul; the 6 Jul session had not run at audit time.
- Every genuine lesson is mapped to a Hypothesis Study and a weekly report; non-productive runs are recorded, not omitted.
- **Dating:** stated + weekday-correct for RUN-001, 011, 015, 016, 017, 018, 024, 027, 028, 030, 032, 034, 038; RUN-026 stated date (24 Jun) without weekday; RUN-022 stated date (20 Jun) but mislabeled weekday; all others inferred from session order (±1 day). RUN-033 (1 Jul) corroborated by RUN-034's in-session review; RUN-040/042/043 corroborated by internal worked-example dates. Apparent one-day gaps: 2026-06-12 and one indeterminable day in 3–5 Jul. Weeks 04–05 and week-07 are clean daily runs; week-06 has 6 of 7 days.
- **Known control issue (weeks 03–07) — fix proven once, not adopted.** Prior-run detection failed in all 14 sessions of weeks 04–05 and in 5 of 6 week-06 sessions. **RUN-034 (2 Jul) is the sole success** (read prior transcripts, rotated tracks, advanced to R&D metrics). **Week-07 (6–12 Jul) fully regressed:** 5 of 7 sessions each declared a fresh "Day 1" (two separate RD Day-1s — RUN-038 portfolio, RUN-039 Stage-Gate — and three consecutive foundational ALCOA+, RUN-041/042/043); RUN-037 and RUN-040 achieved only partial detection (rotated track correctly but logged to non-shared outputs). Cumulative effect: ALCOA+ foundations ~20×, RD portfolio 9×, stage-gate 7×; track balance inverted in week-07 (5 CR / 2 RD); HS-2026-02 starved five weeks. **Remediation required at source:** point the daily generator at this repository (this register + `curriculum/curriculum-map.md`) — not list_sessions or per-session outputs — before each run. RUN-034 proves the behaviour is achievable. Escalated again for human Inspector/Auditor attention.

## 5. Provenance
Reconstructive compilation built 2026-06-15 from verified session transcripts; openly flagged, not backdated. Going forward, each run sheet and this register should be updated on the session day to keep the chain fully contemporaneous.

---

## 6. Audit log (automated weekly Skills Bot runs)

| Audit date | Trigger | New learning sessions | Regulatory change | Integrity | Notes |
|---|---|---|---|---|---|
| 2026-06-15 | Skills Bot (weekly, Mon) — first scheduled run | None since RUN-016 (as at audit time) | None — ATO QC107004 still "Last updated 30 May 2026" | Hash manifest recomputed; traceability intact | Post-RUN-016 activity in build session `b20e5834` was dashboard/infra maintenance (Connectors tab) + scheduling this bot, not a learning lesson — no run sheet created. (Note: RUN-017 ran later that day, after this audit.) |
| 2026-06-22 | Skills Bot (weekly, Mon) — second scheduled run | **7** — RUN-017…023 (15–21 Jun); all genuine, all foundational repeats | None — ATO QC107004 re-fetched, still "Last updated 30 May 2026", schedule year 2026 | Hash manifest recomputed for all files (now 23 runs); traceability re-checked & intact | **Material control finding:** all 7 sessions failed prior-run detection → over-coverage, no progression. week-04 report added. HS-01 += RUN-018/022; HS-03 += RUN-017/019/020/021/023. Needs human action on the daily generator. |
| 2026-06-30 | Skills Bot (weekly) — third scheduled run | **7** — RUN-024…030 (22–28 Jun); all genuine, all foundational repeats | None — ATO QC107004 re-fetched (WebSearch + web_fetch), still "Published 30 May 2026" (`dcterms.modified` 2026-05-29T22:14Z), schedule year 2026, item 21 / NAT 0656 | Pre-change manifest re-verified (42/42 OK); hash manifest recomputed for all files (now 30 runs); traceability re-checked & intact | **Material control finding (3rd week running):** all 7 sessions failed prior-run detection → over-coverage, no progression (CR/ALCOA+ ×4, RD ×3 incl. stage-gate twice). week-05 report added. HS-01 += RUN-024/025/028/029 (now 14); HS-03 += RUN-026/027/030 (now 12); HS-02 unchanged & starved. Apparent 29 Jun gap. Escalated again for human action on the daily generator. |
| 2026-07-06 | Skills Bot (weekly, Mon) — fourth scheduled run | **6** — RUN-031…036 (29 Jun–5 Jul); all genuine; **RUN-034 = first curriculum advance (R&D metrics)**, other 5 foundational repeats | None — ATO QC107004 re-fetched (WebSearch + web_fetch), still "Last updated 30 May 2026" (`dcterms.modified` 2026-05-29T22:22Z), schedule year 2026, item 21 / NAT 0656, $20k floor confirmed | 39/39 untouched files verified vs 2026-06-30 manifest; 11 edited files checked post-edit only (flagged); manifest recomputed (now 36 runs); traceability re-checked & intact | **Mixed control finding:** RUN-034 (2 Jul) succeeded at prior-run detection — first ever — clearing the "R&D metrics (Stevens)" backlog card; RUN-031/032/033/035/036 restarted foundations (RUN-035 list_sessions empty; RUN-036 logged to non-shared outputs). Track balance 5 RD / 1 CR. **Correction:** 29 Jun was not a gap — RUN-031 fills it. One indeterminable gap day in 3–5 Jul. week-06 report added. HS-01 += RUN-033 (15); HS-03 += RUN-031/032/034/035/036 (17); HS-02 starved 4th week. Recommended fix: point daily generator at this repo. |
| 2026-07-13 | Skills Bot (weekly, Mon) — fifth scheduled run | **7** — RUN-037…043 (6–12 Jul); all genuine; **all foundational repeats** (5 ALCOA+, 1 portfolio, 1 Stage-Gate) | None — ATO QC107004 re-checked (WebSearch, ato.gov.au), still "Last updated 30 May 2026", schedule year 2026, item 21 / NAT 0656, $20k floor confirmed | Manifest recomputed for all files (now 43 runs); 7 new run sheets hashed; prior files re-hashed vs 2026-07-06 manifest — unchanged; traceability re-checked & intact | **Regression finding:** full regression after RUN-034 — no advance. RUN-037/040 partial detection (rotated track, non-shared log); RUN-038/039/041/042/043 each a fresh "Day 1" (two RD Day-1s; three consecutive ALCOA+). Track balance 5 CR / 2 RD. Complete 7/7 week, no gap. week-07 report added. HS-01 += RUN-037/040/041/042/043 (20); HS-03 += RUN-038/039 (19); HS-02 starved 5th week. Fix still unapplied at source. |
