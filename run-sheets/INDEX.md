# Run Sheets — Master Index & Integrity

Per-session evidentiary run sheets. Each follows the s 355-25(1)(a)(ii) four-phase progression and links to a Hypothesis Study. The master traceability matrix is in `../CONTROL-REGISTER.md`. Re-verify any file with `sha256sum <path>`.

| Run sheet | Date | Track | Status | Study |
|---|---|---|---|---|
| RUN-001 | 2026-05-29 (stated) | Contemporaneous Records | Genuine | HS-2026-02 |
| RUN-002 | 2026-05-30 (inferred) | Contemporaneous Records | Genuine | HS-2026-01 |
| RUN-003 | 2026-05-31 (inferred) | Contemporaneous Records | Genuine | HS-2026-01 |
| RUN-004 | 2026-06-01 (inferred) | — | Non-lesson | — |
| RUN-005 | 2026-06-02 (inferred) | Contemporaneous Records | Genuine | HS-2026-01 |
| RUN-006 | 2026-06-03 (inferred) | Contemporaneous Records | Partial | HS-2026-01* |
| RUN-007 | 2026-06-04 (inferred) | R&D Management | Genuine | HS-2026-03 |
| RUN-008 | 2026-06-05 (inferred) | Contemporaneous Records | Genuine | HS-2026-02 |
| RUN-009 | 2026-06-06 (inferred) | — | Null (API error) | — |
| RUN-010 | 2026-06-07 (inferred) | R&D Management | Genuine | HS-2026-03 |
| RUN-011 | 2026-06-08 (stated) | Contemporaneous Records | Genuine | HS-2026-01 |
| RUN-012 | 2026-06-09 (inferred) | Contemporaneous Records | Genuine | HS-2026-01 |
| RUN-013 | 2026-06-10 (inferred) | R&D Management | Genuine | HS-2026-03 |
| RUN-014 | 2026-06-11 (inferred) | Contemporaneous Records | Genuine | HS-2026-01 |
| RUN-015 | 2026-06-13 (stated) | Contemporaneous Records | Genuine | HS-2026-01 |
| RUN-016 | 2026-06-14 (stated) | R&D Management | Genuine | HS-2026-03 |
| RUN-017 | 2026-06-15 (stated) | R&D Management | Genuine | HS-2026-03 |
| RUN-018 | 2026-06-16 (stated) | Contemporaneous Records | Genuine | HS-2026-01 |
| RUN-019 | 2026-06-17 (inferred) | R&D Management | Genuine | HS-2026-03 |
| RUN-020 | 2026-06-18 (inferred) | R&D Management | Genuine | HS-2026-03 |
| RUN-021 | 2026-06-19 (inferred) | R&D Management | Genuine | HS-2026-03 |
| RUN-022 | 2026-06-20 (stated; weekday mislabeled) | Contemporaneous Records | Genuine | HS-2026-01 |
| RUN-023 | 2026-06-21 (inferred) | R&D Management | Genuine | HS-2026-03 |
| RUN-024 | 2026-06-22 (stated) | Contemporaneous Records | Genuine | HS-2026-01 |
| RUN-025 | 2026-06-23 (inferred) | Contemporaneous Records | Genuine | HS-2026-01 |
| RUN-026 | 2026-06-24 (stated) | R&D Management | Genuine | HS-2026-03 |
| RUN-027 | 2026-06-25 (stated) | R&D Management | Genuine | HS-2026-03 |
| RUN-028 | 2026-06-26 (stated) | Contemporaneous Records | Genuine | HS-2026-01 |
| RUN-029 | 2026-06-27 (inferred) | Contemporaneous Records | Genuine | HS-2026-01 |
| RUN-030 | 2026-06-28 (stated) | R&D Management | Genuine | HS-2026-03 |

\* RUN-006 partial; tentatively HS-2026-01 pending content recovery.

**Dating:** stated dates verbatim (29 May, 8/13/14/15/16/22/24/25/26/28 Jun); RUN-022 stated 20 Jun but mislabeled "Friday" (actually Saturday); RUN-026 stated 24 Jun without weekday; others inferred (±1 day) — week-05 inferred dates RUN-025 (23 Jun) & RUN-029 (27 Jun) each carry an internal worked-example date; apparent gaps 2026-06-12 & 2026-06-29; week-04 & week-05 = clean 15–21 & 22–28 Jun daily runs.

## Integrity hashes (SHA-256, recomputed at weekly audit 2026-06-30)

```
f674307e134db710397b7d1e4d5e66b9f528b651f76e1daf8dfb236e5fb3990e  README.md
9f4a2ac19af8164cb79460a98c3dad4d0499ab79f1d1d75e2fcfae678b206992  CONTROL-REGISTER.md
df865a43345ecdf4eae633530ae81bfbdc0526fc4ab703d899b511c7fea13f8c  learning-log.md
ec960d2a30385f44712d825612aa2f73746878feb6023684ef630523a1745692  curriculum/curriculum-map.md
803fabe5dd98c2cd4a194c9506b819c6e86ab82ff6df76ad7245b9ae19d93233  docs/maintenance.md
8b3b9a7678143e432a7395c35c2485ab55afca25563f61e4370b1405bc9b0fbd  docs/compliance-mapping.md
39b4862de8c87a95c719f6cd394ff0318a00b0912b8ec223ca6007bcb9a4262c  docs/ato-schedule.md
54908b39280139ef9f90aa02c2b2acc02304fa253c2b60ae2222f2e6da97c52d  docs/architecture.md
b8cbf75aa44fade1cd82d0f60df35426e1ffb006d4a8ef70548f5d95acdbb01b  hypothesis-studies/HS-2026-01.md
5e51e269e56f80f55c9aa01fa0550397ac0dc88b43bd4419d68d5a16802eba86  hypothesis-studies/HS-2026-02.md
6fdc60260cb42468c57ae74d9d3616a4e2b2367fef513f30223ba39ea5042a20  hypothesis-studies/HS-2026-03.md
0f32c9c05265376cd46f8513238c695f8c0f3877c32be43991e20929433345de  hypothesis-studies/INDEX.md
e1f1d2f19cdf36f6fe24996bc0b02702805daa83dbe98e6a7e73fcb7b2af5fee  weekly-reports/2026-05-31-week-01.md
4c109e2374f4e717e8d2d29fd356afaf463966493a9044d21d65f8f6c93e306a  weekly-reports/2026-06-07-week-02.md
49a2f84bfff42235be3f66973fa1410a810ea7da68ed58d6b92488d3a5878c9b  weekly-reports/2026-06-14-week-03.md
34d61fec5cf442661a4935121c428a419421603139a8e0099a6c80696e691fb4  weekly-reports/2026-06-21-week-04.md
905951b71964da49676e8a226af7ab26e9d79a3aaee5b5b14b72e10b1dd8db38  weekly-reports/2026-06-28-week-05.md
1846e3f67d8b04d50d50011d6d10956b4c0632811ac14035bc8ff029145ebd47  run-sheets/RUN-001-2026-05-29.md
8a603b056d456ffe532d546e232616e8c0e9268f8b4df42f904c448e63b0bcbb  run-sheets/RUN-002-2026-05-30.md
41c05f0c3d02e976f0e209a5f1d0222eafaa939f2d7a1f23fcc7f3d22d40aa81  run-sheets/RUN-003-2026-05-31.md
80ba4d3f91c902d5513ec8efcd620aec25b277043f08c8a37fdf26c3983727b1  run-sheets/RUN-004-2026-06-01.md
30803ac9ee30b37330ef7d57e74207fb4247e9032fb89d78d6d2586183ebef83  run-sheets/RUN-005-2026-06-02.md
be2d8d4d42475cbbe58f98799214438ed0a01a5d0fdf8219121d9d000a6cb3d1  run-sheets/RUN-006-2026-06-03.md
421a282bf1ac2486e1da75940b5125a39a171441cb4b6eb6305e0e9ac60216f4  run-sheets/RUN-007-2026-06-04.md
70b9bcab8f81ac2e206c4b9305bd86ea0cc8af3ac70ca7d65ed5a24c44cd2118  run-sheets/RUN-008-2026-06-05.md
682dd3106e6e779b856732947b869b372bf6c94d5ceaf1472be3442b0a350bd9  run-sheets/RUN-009-2026-06-06.md
57cd2f8018a7c3e9e5e50402b1024c9f99a5c67bed262393278961b35e097dfd  run-sheets/RUN-010-2026-06-07.md
ef299dc033947b95729c6ec1f12e6306f597a312199344df828e6d8d2354fd5e  run-sheets/RUN-011-2026-06-08.md
7af51e6fdb32bea8dc271ae9156a8b6d79294114d5cbad1642782c8d4587c442  run-sheets/RUN-012-2026-06-09.md
28153ef633f2c44302bd156451b1dc03c37ae6478aac02d98e997b270a3580b6  run-sheets/RUN-013-2026-06-10.md
a6de7b1be80de958585ed20417ac1d4884bd7f74e4cc74ab38636b0ff503ea3a  run-sheets/RUN-014-2026-06-11.md
e2d128f92389a8fc6b0723678cb831bd1dbd44c1d72afae78647255cdba650a9  run-sheets/RUN-015-2026-06-13.md
b04e54b057a08c04a15c40806a1f4361df5f9ab412839cbabeccd28de220f1f4  run-sheets/RUN-016-2026-06-14.md
d3e2ab772cbf0ba6958de180e02d0ab609fb0941bcdc5923fc2b2e7536a746a1  run-sheets/RUN-017-2026-06-15.md
1633305d0b032dc2fc58dce95e46b20e1a6f665e26a2bd4d42a25790283990b9  run-sheets/RUN-018-2026-06-16.md
4036241da94429258d23f985d4456b6dec2ac9b5448441607927801f08bb53c2  run-sheets/RUN-019-2026-06-17.md
2469d805885584f48128868bf550f4aacf899f6fb1e24154def4c8cf57513e6e  run-sheets/RUN-020-2026-06-18.md
bfb3ba99874ac3687745801f04d3596cb12786e711c1ee4c86041ad777e84a40  run-sheets/RUN-021-2026-06-19.md
5b7815c85eb305d2b30f54979372fbdcd4a971b9f75c02294ff9a1436542e0c4  run-sheets/RUN-022-2026-06-20.md
48a8ba069f39fd48c69b9de2d7ce7bbed8d3383bb6d936ad2497046023aff773  run-sheets/RUN-023-2026-06-21.md
596b51aefbbf392c49f99024555311dda007fa1f8cb0477d74c1a2c717af3689  run-sheets/RUN-024-2026-06-22.md
c5a9f8d701b83d2030c43b4191d50fe0e96121bbbd64873262041c1bcd8c25ee  run-sheets/RUN-025-2026-06-23.md
0cb05c3ea9ebfc028dd46c1799ed03eaa76db033f75775e03b7991b87df34e97  run-sheets/RUN-026-2026-06-24.md
126edb93302a9e1a1efa62d732171e953857c12acbc389dcc1e726b0a0cf28ed  run-sheets/RUN-027-2026-06-25.md
aea9506455043710889a7b642335db982c53bd5997cb5ee62429b47dc802c643  run-sheets/RUN-028-2026-06-26.md
eb8c634e8b30908e98328c825b81392d5572b97040fe8985e31bc2f24f0fcd29  run-sheets/RUN-029-2026-06-27.md
66aaec4cacc029985106eb5afe645d1a506198781d1016aea2f577e60a0347a5  run-sheets/RUN-030-2026-06-28.md
d679c5ef1ac93f05a285fae1c7d837a58e15b5bad866b1bac151f8f98fbde007  index.html
a2e8f85a7bbf2e08640b83e0759bcf7e97709b385b21297cf3675e34b7047bf2  task-board.md
aa68ee4f8e3da0d50952d6e60065247b756edb1d44d98136cbfaa4da07ba196a  task-board.html
```

*Manifest scope (2026-06-30):* covers all evidentiary markdown (now 30 run sheets, 5 weekly reports, 3 studies + index, control register, learning log, curriculum map), the complete `docs/` set, the dashboard (`index.html`) and both task-board files. `run-sheets/INDEX.md` is intentionally not self-hashed. Pre-change re-verification of the prior (2026-06-22) manifest: 42/42 files matched.
