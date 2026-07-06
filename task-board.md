# Task Board — Agile R&D Hypothesis Management (Kanban)

A Trello-style board that operationalises the control register as a working task manager. It applies an **Agile R&D** model to the s 355-25 systematic-progression lifecycle, so progress is managed the way leading tools (Trello/Jira) manage Agile work — while staying inspection-ready.

**Interactive version:** open `task-board.html` in a browser for the drag-and-drop-style board view.

## Agile mapping

| Agile concept | This system |
|---|---|
| Board | This curriculum's hypothesis pipeline |
| Epic | **Hypothesis Study** (HS-2026-01/02/03) |
| Card / Story | **Run sheet** (one session) or a backlog hypothesis |
| Sprint | **Week** (week-01 … week-05) |
| Label | Track (Contemporaneous Records / R&D Management) + Study |
| Definition of Done | Conclusion engages the hypothesis (confirmed / partial / refuted) **and** run sheet filed, hashed, linked to study + weekly report |
| Column (workflow state) | The four s 355-25 phases + Done/Blocked |

## Columns map to s 355-25 phases

`Backlog (proposed hypotheses)` → `Hypothesis defined` → `Experiment (in progress)` → `Observation & evaluation` → `Concluded ✓` → `Blocked / needs rework`

---

## BACKLOG — proposed hypotheses (open tasks from study stopping-criteria)
- **[HS-01] 21 CFR Part 11 audit-trail mechanics** — not yet given a dedicated session *(CR)*
- **[HS-01] Chain-of-custody for records** *(CR)*
- **[HS-02] Litigation hold / spoliation** *(CR)*
- **[HS-02] Patent inventorship records in dispute** *(CR)*
- **[HS-03] Technology roadmapping** *(RD)*
- **[HS-03] Managing scientists & engineers** *(RD)*
- **[HS-03] IP strategy** *(RD)*
- **⚠ [HS-02] starved — no new card fed for 4 weeks (wk-03…wk-06); litigation hold/spoliation and inventorship-in-dispute still unaddressed**

## HYPOTHESIS DEFINED (ready for next run)
- **[HS-01→new study] 21 CFR Part 11 audit-trail mechanics / chain-of-custody** *(CR)* ← next per track-alternation rule (week-06 ran 5 RD / 1 CR); would also feed starved HS-02. Deferred ~12 sessions; open as a fresh CR thread instead of re-confirming ALCOA+ a 16th time.
- **[HS-03] Technology roadmapping** *(RD)* — the next RD card after Records rotates back. (R&D metrics card was **done at RUN-034** — the first session to advance rather than restart.)

## EXPERIMENT (in progress)
- *(none — no session mid-flight)*

## OBSERVATION & EVALUATION
- *(none)*

## CONCLUDED ✓ (Definition of Done met)
**Epic HS-2026-01 — ALCOA+ data integrity (15 cards):** RUN-002, RUN-003, RUN-005, RUN-011, RUN-012, RUN-014, RUN-015, RUN-018, RUN-022, RUN-024, RUN-025, RUN-028, RUN-029, RUN-033 ✓ · RUN-006 ⚠ partial
**Epic HS-2026-02 — Legal defensibility (2 cards):** RUN-001 ✓ · RUN-008 ✓
**Epic HS-2026-03 — R&D portfolio & stage-gate (17 cards):** RUN-007 ✓ · RUN-010 ✓ · RUN-013 ✓ · RUN-016 ✓ · RUN-017 ✓ · RUN-019 ✓ · RUN-020 ✓ · RUN-021 ✓ · RUN-023 ✓ · RUN-026 ✓ · RUN-027 ✓ · RUN-030 ✓ · RUN-031 ✓ · RUN-032 ✓ · **RUN-034 ✓★ (R&D metrics — backlog card cleared; first curriculum advance)** · RUN-035 ✓ · RUN-036 ✓

## BLOCKED / NEEDS REWORK
- **RUN-006** ⚠ partial — lesson body not recoverable; *task: recover saved log file or re-run topic*
- **RUN-009** ⛔ null — API 529 error; *task: re-run the missed session*
- **RUN-004** ▫ non-lesson (advisory) — no action; recorded for completeness

---

## Sprint (week) summary

| Sprint | Cards done | Epics touched | Notes |
|---|---|---|---|
| week-01 (29–31 May) | 3 | HS-01, HS-02 | Records foundations opened |
| week-02 (1–7 Jun) | 4 + 1 partial + 1 null + 1 advisory | HS-01, HS-02, HS-03 | RD track opened; reliability issues |
| week-03 (8–14 Jun) | 6 | HS-01, HS-03 | Strongest sprint; ALCOA+ over-covered |
| week-04 (15–21 Jun) | 7 | HS-01, HS-03 | Highest volume, lowest progression — all 7 re-taught foundations (prior-run detection failed in every session); track-alternation breached (3 RD days running) |
| week-05 (22–28 Jun) | 7 | HS-01, HS-03 | Pattern repeats — all 7 re-taught foundations (CR/ALCOA+ ×4, RD ×3 incl. stage-gate twice); track-alternation breached (CR back-to-back 22–23 Jun); HS-02 still starved |
| week-06 (29 Jun–5 Jul) | 6 (1 gap day) | HS-01, HS-03 | **Breakthrough + regression:** RUN-034 first-ever successful prior-run detection → new material (R&D metrics, backlog card done). Other 5 restarted foundations; track balance 5 RD / 1 CR; HS-02 starved 4th week |

## WIP / control rules
1. One session = one card; card is Done only when its run sheet is filed, hashed, and linked to a study + weekly report.
2. Backlog is the controlled list of next hypotheses; the scheduler pulls the top card respecting **track alternation** (don't run the same track twice running).
3. Blocked cards (partial/null) must carry a remediation task and be revisited.
4. An epic (study) closes only when its stopping criterion in `hypothesis-studies/HS-2026-NN.md` is met.
