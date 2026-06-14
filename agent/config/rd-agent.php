<?php
return [
    // Shared secret the host application must send as Bearer token to the ingest API.
    'token' => env('RD_AGENT_TOKEN'),

    // Base URL + key of the R&D Skills Bot service (records manager / dashboard backend).
    'skills_bot' => [
        'base_url' => env('RD_SKILLS_BOT_URL', 'http://localhost:8081'),
        'key'      => env('RD_SKILLS_BOT_KEY'),
    ],

    // Where the agent routes each kind of data point inside the skills manager.
    // Each maps to a "lane" the Inspector/Auditor reviews.
    'routing' => [
        'task'        => 'task-board',        // task management -> Kanban cards
        'timesheet'   => 'timesheets',        // timesheet control -> effort evidence
        'document'    => 'document-centre',    // document centre review
        'report'      => 'reports',            // reports folders
        'financial'   => 'financials',         // financials folder
        'accounting'  => 'accounting',         // accounting review (R&D expenditure)
        'experiment'  => 'run-sheets',         // experimental evidence -> run sheets
        'hypothesis'  => 'hypothesis-studies', // hypotheses -> studies
    ],

    // ATO R&D Tax Incentive Schedule source (latest located 2026-06-15).
    'ato' => [
        'schedule_year' => env('RD_ATO_YEAR', 2026),
        'instructions_url' => 'https://www.ato.gov.au/forms-and-instructions/research-and-development-tax-incentive-schedule-2026-instructions/instructions-to-complete-the-rd-tax-incentive-schedule-2026',
        'qc' => 'QC107004',
        'company_return' => 'NAT 0656 — item 21',
        // Local cache the SyncAtoSchedule command writes to.
        'cache_path' => storage_path('app/rd-agent/ato-schedule.json'),
    ],

    // Connectors are resolved by key; bind real implementations in the host app.
    'connectors' => [
        'task'       => \Fleetpass\RdAgent\Connectors\NullConnector::class,
        'timesheet'  => \Fleetpass\RdAgent\Connectors\NullConnector::class,
        'document'   => \Fleetpass\RdAgent\Connectors\NullConnector::class,
        'report'     => \Fleetpass\RdAgent\Connectors\NullConnector::class,
        'financial'  => \Fleetpass\RdAgent\Connectors\NullConnector::class,
        'accounting' => \Fleetpass\RdAgent\Connectors\NullConnector::class,
    ],
];
