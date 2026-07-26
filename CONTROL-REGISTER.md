# Control Register & R&D Inspector's Index

**Purpose.** This is the single entry point and control document for the skill-builder contemporaneous records. It governs the evidence chain end-to-end — **Hypothesis Study → Run Sheets → Weekly Report → Learning Log → source session** — so an R&D inspector (e.g. AusIndustry under ITAA 1997 s 355-25) can trace any claim of activity to its dated, hashed evidence and see what is open, confirmed, or unverifiable.

**Compiled:** 2026-06-15 (reconstructive — see Provenance). **Last automated audit:** 2026-07-27 (sixth Skills Bot run; **12 new sessions RUN-044…055** added, 13–26 Jul, covering **two** sprints because **no audit ran on 2026-07-20** — disclosed in §6; three genuine content advances into the previously starved HS-2026-02, but detection 0/12 successful; new **prompt-drift** defect recorded — see §6). **Owner:** daily-skill-builder-rd-records (for Leonardo).

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
| **HS-2026-01** | ALCOA+ governs record integrity; Contemporaneous is load-bearing & irreparable | **Open — CONFIRMED; chronically repetitive (27)** | RUN-002, 003, 005, 006*, 011, 012, 014, 015, 018, 022, 024, 025, 028, 029, 033, 037, 040, 041, 042, 043, 044, 045, 047, 051, 052, 053, 055 | week-01…week-09 | **Overdue.** Close the foundational arc; treat any further ALCOA+ foundation session as a control failure. Open 21 CFR Part 11 audit-trail mechanics & chain-of-custody as a distinct study (on the backlog 9 weeks; RUN-051 named it as its own "next" and nothing followed) |
| **HS-2026-02** | Contemporaneous, witnessed, tamper-resistant records convert claimed work into legal evidence | **Open — reactivated & developing (5)** | RUN-001, 008, 046, 049, 050 | week-01, week-02, week-08, week-09 | **Two of three backlog cards cleared** (inventorship-in-dispute → RUN-046; witnessing/corroboration + reconstruction → RUN-049/050). Remaining: **litigation hold / spoliation**; chain-of-custody shared with HS-01. Caveat: all three advances were topic coincidences, not detected gaps |
| **HS-2026-03** | R&D is governed at portfolio + project levels; single-metric selection underperforms | **Open — developing (21); one advance RUN-034; now the starved track** | RUN-007, 010, 013, 016, 017, 019, 020, 021, 023, 026, 027, 030, 031, 032, 034, 035, 036, 038, 039, 048, 054 | week-02…week-09 | **R&D metrics (Stevens) DONE (RUN-034).** Add roadmapping, managing scientists, IP strategy before closing synthesis. Only 2 RD sessions in 14 days (RUN-048 portfolio, RUN-054 Stage-Gate) — both foundational repeats |

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
| RUN-044 | 2026-07-13 (stated) | CR | Genuine | HS-2026-01 | week-08 | ddebd1b6 |
| RUN-045 | 2026-07-14 (stated) | CR | Genuine | HS-2026-01 | week-08 | 86fdb18f |
| RUN-046 | 2026-07-15 (stated) | CR | Genuine — advance | HS-2026-02 | week-08 | fdfd2ca7 |
| RUN-047 | 2026-07-16 (inf.; ex. dated 16 Jul) | CR | Genuine | HS-2026-01 | week-08 | 7ae61d97 |
| RUN-048 | 2026-07-17 (inf. ±1, uncorroborated) | RD | Genuine | HS-2026-03 | week-08 | 3d5ef5c1 |
| RUN-049 | 2026-07-20 (inf. ±1, uncorroborated) | CR | Genuine — advance | HS-2026-02 | week-09 | b0a12236 |
| RUN-050 | 2026-07-21 (inf.; ex. dated 21 Jul) | CR | Genuine — advance | HS-2026-02 | week-09 | ea409943 |
| RUN-051 | 2026-07-22 (inf. ±1, uncorroborated) | CR | Genuine | HS-2026-01 | week-09 | 284d037f |
| RUN-052 | 2026-07-23 (stated) | CR | Genuine | HS-2026-01 | week-09 | 92d8e5e3 |
| RUN-053 | 2026-07-24 (inf. ±1, uncorroborated) | CR | Genuine | HS-2026-01 | week-09 | 520eb010 |
| RUN-054 | 2026-07-25 (stated) | RD | Genuine | HS-2026-03 | week-09 | 7e8c733e |
| RUN-055 | 2026-07-26 (stated) | CR | Genuine | HS-2026-01 | week-09 | 77968610 |

Weekly reports: week-01 = `weekly-reports/2026-05-31-week-01.md`; week-02 = `…/2026-06-07-week-02.md`; week-03 = `…/2026-06-14-week-03.md`; week-04 = `…/2026-06-21-week-04.md`; week-05 = `…/2026-06-28-week-05.md`; week-06 = `…/2026-07-05-week-06.md`; week-07 = `…/2026-07-12-week-07.md`; week-08 = `…/2026-07-19-week-08.md`; week-09 = `…/2026-07-26-week-09.md`.

---

## 4. Coverage & integrity summary

- **55 scheduled runs** documented (29 May – 26 Jul 2026): **52 genuine**, **1 partial** (RUN-006), **2 non-productive** (RUN-004 advisory, RUN-009 null API error). The 12 runs added 13–26 Jul are all genuine — no nulls, partials or advisory runs in that period. **Correction:** the 30 Jun audit's "apparent gap 29 Jun" is withdrawn — RUN-031 (session 9336445b) fills it; it existed but was not detected then. One indeterminable gap day remains in 3–5 Jul; the 6 Jul session had not run at audit time.
- Every genuine lesson is mapped to a Hypothesis Study and a weekly report; non-productive runs are recorded, not omitted.
- **Dating:** stated + weekday-correct for RUN-001, 011, 015, 016, 017, 018, 024, 027, 028, 030, 032, 034, 038; RUN-026 stated date (24 Jun) without weekday; RUN-022 stated date (20 Jun) but mislabeled weekday; all others inferred from session order (±1 day). RUN-033 (1 Jul) corroborated by RUN-034's in-session review; RUN-040/042/043/047/050 corroborated by internal worked-example dates. **Weakest dating in the record: RUN-048, 049, 051 and 053 are inferred from session order alone with no stated or example date (±1 day) — flagged on each sheet.** Newly stated + weekday-correct: RUN-044, 045, 046, 052, 055; RUN-054 stated without weekday. Apparent one-day gaps: 2026-06-12 and one indeterminable day in 3–5 Jul. **New: a two-day gap on 18–19 Jul 2026 (Sat–Sun)** — the first weekend outage; cause not determinable from available evidence. Weeks 04–05, week-07 and week-09 are clean daily runs; week-06 has 6 of 7 days; week-08 has 5 of 7.
- **Known control issue (weeks 03–09) — fix proven once, never adopted; now nine weeks old.** Prior-run detection has failed in all but one session in the record. **RUN-034 (2 Jul) remains the sole success.** Week-07 fully regressed. **Weeks 08–09 (13–26 Jul): 12 sessions, detection 0 SUCCESS / 2 PARTIAL / 10 FAILED.** No session read this repository; none called `list_sessions` or `read_transcript`; only three made any tool call at all. RUN-052 and RUN-055 each started a progression log and each wrote it to their own session-local outputs — the identical RUN-036 failure mode, now three times over; RUN-053 ran the day after RUN-052 and could not see its log. **RUN-049 additionally made a false continuity claim** ("Yesterday's lab notebook was signed by the inventor…") having made no tool calls; the actual preceding session was an R&D portfolio lesson. Cumulative effect: ALCOA+ foundations ~27×, RD portfolio 10×, stage-gate 8×; track balance 10 CR / 2 RD across the fortnight, making RD the starved track.

- **New control defect — prompt drift (first recorded 2026-07-27).** The `<run-summary>` instruction present in the RUN-044/045/046 task files is **absent from RUN-047 onward**, and no run summaries were produced after 16 Jul. The daily prompt is not stable across runs. This is independent of the detection failure and needs its own fix at source.

- **Counterweight — three genuine content advances, none of them controlled.** RUN-046 (conception vs reduction to practice, CRISPR interference), RUN-049 (witnessing: patent vs GxP) and RUN-050 (retrospective reconstruction; FRE 803(6) / Evidence Act s 69) delivered new material into **HS-2026-02 after five starved weeks**, clearing two of its three backlog cards. Each session independently reported it could see no prior state. The study advanced by topic coincidence, not by reading the backlog — so this is not evidence the control problem is improving.

- **Remediation required at source (escalated, three specific actions):** (1) point the daily generator at this register + `curriculum/curriculum-map.md` before each run — not `list_sessions`, not its own outputs; (2) restore the `<run-summary>` instruction dropped after 16 Jul; (3) require any progression log to be written into this repository. RUN-034 proves (1) works. Escalated again for human Inspector/Auditor attention.

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
| **2026-07-20** | **Skills Bot (weekly, Mon) — NOT RUN** | — | — | — | **Audit omission, disclosed not concealed.** No learning-log entry, control-register entry, weekly report or manifest exists for this date and none was found on inspection. The scheduled weekly audit did not run. Consequence: RUN-044…048 were filed 11–14 days after activity instead of ≤7, and the 2026-07-27 run had to cover two sprints. Cause not determinable from available evidence. Flagged for human Inspector/Auditor attention. |
| 2026-07-27 | Skills Bot (weekly, Mon) — sixth scheduled run; **covers two sprints** (week-08 + week-09) | **12** — RUN-044…055 (13–26 Jul); all genuine, no nulls/partials/advisory; **3 substantive advances** (RUN-046, 049, 050 → HS-2026-02), 9 foundational repeats | None — ATO QC107004 re-checked (WebSearch **+** full web_fetch), still "Last updated 30 May 2026" (`dcterms.modified` 2026-05-29T22:22Z), schedule year 2026, Parts A–E, item 21 labels W/X, NAT 0656, $20k floor, TR 2021/5, TA 2023/5, ss 355-405/415, subdiv 355-E, Div 27 all reconfirmed; no 2027 schedule | **All 65 prior files verified against the 2026-07-13 manifest BEFORE any edit — 65/65 matched, clearing the standing scope caveat.** Manifest recomputed for all files (now 55 runs); traceability re-checked & intact | **Chronic-failure finding + new defect.** Detection 0/12 (2 partial, 10 failed); RUN-052 & RUN-055 logged session-locally (RUN-036 failure mode ×3); **RUN-049 made a false continuity claim** having read nothing. **New defect: prompt drift** — `<run-summary>` instruction absent from RUN-047 onward. **Two-day gap 18–19 Jul.** HS-01 += 7 (now 27); **HS-02 += RUN-046/049/050 (now 5 — reactivated, 2 of 3 cards cleared)**; HS-03 += RUN-048/054 (21). week-08 and week-09 reports added. Three named remediation actions escalated. |
