# Task Board — Agile R&D Hypothesis Management (Kanban)

A Trello-style board that operationalises the control register as a working task manager. It applies an **Agile R&D** model to the s 355-25 systematic-progression lifecycle, so progress is managed the way leading tools (Trello/Jira) manage Agile work — while staying inspection-ready.

**Interactive version:** open `task-board.html` in a browser for the drag-and-drop-style board view.

## Agile mapping

| Agile concept | This system |
|---|---|
| Board | This curriculum's hypothesis pipeline |
| Epic | **Hypothesis Study** (HS-2026-01/02/03) |
| Card / Story | **Run sheet** (one session) or a backlog hypothesis |
| Sprint | **Week** (week-01 … week-09) |
| Label | Track (Contemporaneous Records / R&D Management) + Study |
| Definition of Done | Conclusion engages the hypothesis (confirmed / partial / refuted) **and** run sheet filed, hashed, linked to study + weekly report |
| Column (workflow state) | The four s 355-25 phases + Done/Blocked |

## Columns map to s 355-25 phases

`Backlog (proposed hypotheses)` → `Hypothesis defined` → `Experiment (in progress)` → `Observation & evaluation` → `Concluded ✓` → `Blocked / needs rework`

---

## BACKLOG — proposed hypotheses (open tasks from study stopping-criteria)
- **[HS-01] 21 CFR Part 11 audit-trail mechanics** — not yet given a dedicated session; **9 weeks on the backlog**. RUN-051 (22 Jul) named it as its own "next" and nothing followed *(CR)*
- **[HS-01] Chain-of-custody for records** *(CR)*
- **[HS-02] Litigation hold / spoliation** *(CR)* ← **the last open HS-02 card**
- **[HS-03] Technology roadmapping** *(RD)*
- **[HS-03] Managing scientists & engineers** *(RD)*
- **[HS-03] IP strategy** *(RD)*
- **⚠ [HS-03] now the starved track — only 2 RD sessions in the 14 days 13–26 Jul (RUN-048, RUN-054), both foundational repeats**
- **⚙ CONTROL CARD — restore the `<run-summary>` instruction** dropped from the daily task file after 16 Jul (prompt drift; new defect 2026-07-27) *(human action)*
- **⚙ CONTROL CARD — point the daily generator at this repository** (`CONTROL-REGISTER.md` + `curriculum/curriculum-map.md`) before generating *(human action, 9 weeks outstanding)*
- **⚙ CONTROL CARD — progression logs must be written into this repository**, not per-session outputs (RUN-036, RUN-052, RUN-055 all wrote session-locally) *(human action)*
- **⚙ CONTROL CARD — investigate the missed 2026-07-20 audit** and the 18–19 Jul session gap *(human action)*

## HYPOTHESIS DEFINED (ready for next run)
- **[HS-02] Litigation hold / spoliation** *(CR)* ← **new top card.** HS-02 was reactivated in weeks 08–09 (RUN-046, 049, 050 cleared inventorship-in-dispute, witnessing/corroboration and reconstruction); this is the one remaining card in that study.
- **[HS-01→new study] 21 CFR Part 11 audit-trail mechanics / chain-of-custody** *(CR)* — still unopened after 9 weeks. Weeks 08–09 instead produced six more from-scratch ALCOA+ restarts (~27× total). Open this as a fresh CR thread rather than a 28th ALCOA+ repeat.
- **[HS-03] Technology roadmapping** *(RD)* — the next RD card, and RD now needs the rotation back (2 sessions in 14 days). Weeks 08–09's RD sessions (RUN-048/054) restarted portfolio & Stage-Gate instead. (R&D metrics card **done at RUN-034** — still the only session to advance *by detection*.)

## EXPERIMENT (in progress)
- *(none — no session mid-flight)*

## OBSERVATION & EVALUATION
- *(none)*

## CONCLUDED ✓ (Definition of Done met)
**Epic HS-2026-01 — ALCOA+ data integrity (27 cards):** RUN-002, RUN-003, RUN-005, RUN-011, RUN-012, RUN-014, RUN-015, RUN-018, RUN-022, RUN-024, RUN-025, RUN-028, RUN-029, RUN-033, RUN-037, RUN-040, RUN-041, RUN-042, RUN-043, RUN-044, RUN-045, RUN-047, RUN-051, RUN-052, RUN-053, RUN-055 ✓ · RUN-006 ⚠ partial
**Epic HS-2026-02 — Legal defensibility (5 cards):** RUN-001 ✓ · RUN-008 ✓ · **RUN-046 ✓★ (conception vs reduction to practice — inventorship-in-dispute card cleared)** · **RUN-049 ✓★ (witnessing: patent vs GxP)** · **RUN-050 ✓★ (retrospective reconstruction)**
**Epic HS-2026-03 — R&D portfolio & stage-gate (21 cards):** RUN-007 ✓ · RUN-010 ✓ · RUN-013 ✓ · RUN-016 ✓ · RUN-017 ✓ · RUN-019 ✓ · RUN-020 ✓ · RUN-021 ✓ · RUN-023 ✓ · RUN-026 ✓ · RUN-027 ✓ · RUN-030 ✓ · RUN-031 ✓ · RUN-032 ✓ · **RUN-034 ✓★ (R&D metrics — backlog card cleared; only curriculum advance)** · RUN-035 ✓ · RUN-036 ✓ · RUN-038 ✓ · RUN-039 ✓ · RUN-048 ✓ · RUN-054 ✓

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
| week-07 (6–12 Jul) | 7 (complete week) | HS-01, HS-03 | **Full regression:** no advance; 5 ALCOA+ repeats + portfolio + Stage-Gate. RUN-037/040 partial detection; RUN-038/039/041/042/043 fresh "Day 1"s; track balance 5 CR / 2 RD; HS-02 starved 5th week |
| week-08 (13–19 Jul) | 5 (**2 gap days: 18–19 Jul**) | HS-01, HS-02, HS-03 | **One accidental advance:** RUN-046 (CRISPR interference) reactivated HS-02 after 5 starved weeks — while reporting it could see no prior state. RUN-044/045/047 ALCOA+ repeats; RUN-048 portfolio repeat. Detection 0/5. **New defect: prompt drift** — `<run-summary>` absent from RUN-047 onward |
| week-09 (20–26 Jul) | 7 (complete week) | HS-01, HS-02, HS-03 | **Best content week since week-03, worst control:** RUN-049 & RUN-050 added new HS-02 material with **zero tool calls between them**. RUN-051/052/053/055 ALCOA+ repeats, RUN-054 Stage-Gate repeat. Detection 0 success / 2 partial (both logged session-locally) / 5 failed. RUN-049 made a false continuity claim. Track balance 6 CR / 1 RD |

## WIP / control rules
1. One session = one card; card is Done only when its run sheet is filed, hashed, and linked to a study + weekly report.
2. Backlog is the controlled list of next hypotheses; the scheduler pulls the top card respecting **track alternation** (don't run the same track twice running).
3. Blocked cards (partial/null) must carry a remediation task and be revisited.
4. An epic (study) closes only when its stopping criterion in `hypothesis-studies/HS-2026-NN.md` is met.
5. **⚙ Control cards are board items too.** A process defect (prompt drift, non-shared logs, a missed audit) is tracked in the Backlog like any hypothesis card, and is not closed until the fix is applied at source and verified by a subsequent audit.
