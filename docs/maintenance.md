# Maintenance & Provenance

## How these records are produced
A scheduled task ("daily-skill-builder-rd-records") runs each weekday at 17:30 and delivers one lesson on either R&D Management or Contemporaneous Records. This repository turns those runs into an auditable SPW trail.

## How this compilation was built
On 2026-06-15 the prior runs' session transcripts were read and summarised into:
- `learning-log.md` — one SPW entry per run;
- `run-sheets/RUN-0NN-*.md` — one evidentiary run sheet per run (incl. null/partial);
- `weekly-reports/` — three weekly syntheses;
- `curriculum/curriculum-map.md` — progression and known gaps.

This was a **reconstructive** pass, openly flagged. Going forward, filing each run sheet on its own session day keeps the chain fully contemporaneous.

## Integrity
- `run-sheets/INDEX.md` carries SHA-256 hashes of every file at compilation time.
- The git commit history is the authoritative immutable audit trail.
- `archive/skill-records.bundle` is a portable copy of the full history: `git clone skill-records.bundle <dir>` restores the exact tree.

## Updating on GitHub
The repo lives at `github.com/efleetpasscorp/skill-builder-records`. To push from a machine with the working tree:
```
git remote add origin https://github.com/efleetpasscorp/skill-builder-records.git
git push -u origin main
```
If pushing the bundle's history instead: `git clone skill-records.bundle repo && cd repo && git remote set-url origin <url> && git push`.

## Automated weekly audit (from 2026-06-15)
A weekly Skills Bot run (`rd-compliance-skills-bot`, Mondays) now performs the regulatory refresh, new-session audit, integrity re-hash, dashboard refresh, bundle rebuild and GitHub push. Each run appends a row to `CONTROL-REGISTER.md` §6 and, when there is no new learning session, records a brief "no changes" audit note in `learning-log.md` rather than inventing activity. First run: **2026-06-15** (no new sessions since RUN-016).
