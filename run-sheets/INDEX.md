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

\* RUN-006 partial; tentatively HS-2026-01 pending content recovery.

**Dating:** stated dates verbatim (29 May, 8/13/14 Jun); others inferred (±1 day); apparent gap 2026-06-12.

## Integrity hashes (SHA-256, at compilation 2026-06-15)

```
f11f8d9083d911e3c53cab4b3de2d14b685bccbb0f746c6fd17a09c340c8d511  README.md
6442ee4a77edb1450a56e3c19681fa7ec2c431eff5c6b5817eafe1e3d1e3bce8  CONTROL-REGISTER.md
b2fc878076356293610cb73d6f6174c945cd3920c075d4c0ba7b67727d5c76b2  learning-log.md
68280a42220002c07b9b296baf904d5d82e1fac2ae48adab89d7027da5a23dcf  curriculum/curriculum-map.md
5a0c918573be2c0ee50c403ff32436ee01774dce2c5db4e6f357cd4b1c97db2c  docs/maintenance.md
8b3b9a7678143e432a7395c35c2485ab55afca25563f61e4370b1405bc9b0fbd  docs/compliance-mapping.md
0f0731bba0f8c4fdb58fb5c588afdbb1d23a504d7068a16e9bdd8874ad8eee05  hypothesis-studies/HS-2026-01.md
5e51e269e56f80f55c9aa01fa0550397ac0dc88b43bd4419d68d5a16802eba86  hypothesis-studies/HS-2026-02.md
c612ef10884d8cdc4220fdc584ed358d19ab9af43ce6a7b84429ae8b69e553f4  hypothesis-studies/HS-2026-03.md
6b6a8b6e18d8726d1bcf872f2b15d3fb8db31dbbbd705c8540d89d9127c67d46  hypothesis-studies/INDEX.md
e1f1d2f19cdf36f6fe24996bc0b02702805daa83dbe98e6a7e73fcb7b2af5fee  weekly-reports/2026-05-31-week-01.md
4c109e2374f4e717e8d2d29fd356afaf463966493a9044d21d65f8f6c93e306a  weekly-reports/2026-06-07-week-02.md
49a2f84bfff42235be3f66973fa1410a810ea7da68ed58d6b92488d3a5878c9b  weekly-reports/2026-06-14-week-03.md
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
```
