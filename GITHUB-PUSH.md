# Getting these records onto GitHub

The records have already been committed to a real git history (commit `a446519`, week ending 2026-06-14) and packaged as a portable bundle: **`skill-records.bundle`** in this folder.

Two things to know about this folder:
- It is mounted **create-only** in the assistant's sandbox — files can be created but not deleted or renamed there, so git's lock files fail. That's why a live repo can't run *inside* this exact mount from the assistant side. It works fine from your own machine.
- There is a leftover empty `.git` skeleton in this folder from the first attempt. It contains no commits. Delete it before initializing a real repo here: in PowerShell `Remove-Item -Recurse -Force .git`, or just delete the `.git` folder in Explorer (enable "show hidden items").

## Option A — push from your machine using the bundle (no connector needed)
```bash
# 1. Create an empty repo on GitHub (e.g. "skill-builder-records"), then:
git clone skill-records.bundle skill-builder-records
cd skill-builder-records
git remote set-url origin https://github.com/<you>/skill-builder-records.git
git push -u origin master
```
This preserves the full commit history and the integrity hashes.

## Option B — let the assistant commit/push for you
The hosted GitHub connector returned: *"Incompatible auth server: does not support dynamic client registration."* Authenticate it manually first:
1. Run `/mcp` in the app and complete GitHub authentication.
2. Then ask the assistant to commit future weekly records to a named repo — it can create the repo and push directly.

## Ongoing
Each Friday's weekly synthesis + that week's run sheets should be added as a new commit, so the git history itself becomes the contemporaneous, timestamped audit trail (commit hashes are immutable and tamper-evident).
