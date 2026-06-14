# Regulatory Compliance Mapping (Australian R&D Tax Incentive)

How this record system aligns with the legislation and ATO/AusIndustry administrative requirements that govern R&D Tax Incentive (R&DTI) record-keeping. This makes the contemporaneous records *inspection-ready in form*.

> **Scope & disclaimer.** This maps the **record-keeping structure** to the law. It does **not** assert that the skill-builder learning activity documented here is itself an eligible R&D activity — professional-development/learning is a different thing from experimental R&D and would have to be assessed on its own facts under s 355-25. Nothing here is tax or legal advice; AusIndustry guides and the legislation are the authority, and a registered tax agent / R&D adviser should confirm any actual claim.

## 1. Legislative anchors

| Requirement | Source | How these records address it |
|---|---|---|
| Core R&D = experimental activity proceeding by a **systematic progression of work: hypothesis → experiment → observation & evaluation → logical conclusions** | **ITAA 1997 s 355-25(1)(a)(ii)** | Every `run-sheets/RUN-0NN-*.md` is structured in exactly these four phases ("Systematic progression of work" block). The four-phase chain is the spine of each run sheet and each `hypothesis-studies/HS-2026-NN.md`. |
| Outcome **cannot be known in advance** (competent-professional test) | **s 355-25(1)(a)** | Each run sheet records the working hypothesis as a proposition to be tested, with the inputs/sources consulted; studies note where prior knowledge was searched. |
| Conducted **for the purpose of generating new knowledge** | **s 355-25(1)(b)** | Run-sheet hypotheses and study master-hypotheses state the intended knowledge to be gained, recorded at the time of the entry. |
| **Excluded** core activities (incl. internal-administration software) | **s 355-25(2)** (esp. (2)(h)) | Noted as a boundary test in the curriculum/compliance docs; flagged for any future activity that touches internal-use software. |
| **Supporting** R&D activities — directly related; dominant-purpose test where goods/services are produced | **s 355-30** | Reserved for future use; the run-sheet "Contributes to" field provides the nexus mechanism if supporting activities are later recorded. |
| **R&D entity** eligibility | **s 355-35** | Out of scope of this learning log; flagged as a precondition for any actual registration. |
| **Notional deductions / conditions** (registered, conducted in Australia) | **ss 355-205, 355-210** | Out of scope here; noted as preconditions. |
| **Annual registration with AusIndustry within 10 months** of year-end | **Industry Research and Development Act 1986 (Cth)** | Process note for any real claim; not triggered by this learning record. |
| **Keep records to substantiate** (retention, contemporaneity) | **ITAA 1936 s 262A; TAA 1953**; AusIndustry *Guide to Interpretation* Tables 1 & 2 | The whole repository — dated run sheets, SHA-256 hashes (`run-sheets/INDEX.md`), git history, and `archive/skill-records.bundle` — is the substantiation layer. |

## 2. Authorities relied on

- **ITAA 1997 Division 355**, esp. ss 355-25 and 355-30.
- AusIndustry, *Software-related activities and the R&D Tax Incentive* (May 2024).
- AusIndustry, *Guide to Interpretation* (read first; Tables 1 & 2 list acceptable evidence types — including less-formal records such as commits, tickets, screenshots, IM exports).
- *Moreton Resources Ltd v Innovation and Science Australia* [2019] FCAFC 120 (known techniques applied in a new context can still qualify, on the facts).
- ATO Taxpayer Alerts **TA 2017/2–TA 2017/5** (software / ordinary-business-activity claims that attract scrutiny).

## 3. The four-phase mapping (s 355-25(1)(a)(ii)) as applied per run sheet

| Phase (legislation) | Run-sheet field |
|---|---|
| Hypothesis | "Working hypothesis (this session)" |
| Experiment | "Experiments / activity" |
| Observation **and** evaluation | "Observation / evaluation" (records *what was measured* and *what it means* — not mere reporting) |
| Logical conclusions | "Conclusion" (engages the hypothesis: confirmed / partial / refuted) + "Next working hypothesis" |

This is deliberately the same four-phase test AusIndustry applies; an examiner can read any run sheet and locate each statutory phase by its labelled field.

## 4. Evidence-quality alignment (AusIndustry Guide, Tables 1 & 2)

- **Contemporaneity** — the records are openly flagged as a 2026-06-15 reconstructive compilation from session transcripts, not backdated. The Guide values records made at the time; the remediation (file each run sheet on its session day) is documented in `docs/maintenance.md`.
- **Traceability** — every factual claim in a run sheet traces to a named source session ID; `CONTROL-REGISTER.md` is the master traceability matrix (run sheet → study → report → source).
- **Failed/abandoned work is retained** — null and partial runs (RUN-004, RUN-006, RUN-009) are recorded, consistent with the Guide's recognition that failed experiments and honest gaps belong in the record.

## 5. Honest compliance caveats (for the inspector)
1. Format alignment ≠ eligibility: the underlying activity here is learning, not experimental R&D.
2. Most dates are inferred (±1 day); only four are stated. See `CONTROL-REGISTER.md` §4.
3. The compilation is reconstructive; full contemporaneity requires same-day filing going forward.
