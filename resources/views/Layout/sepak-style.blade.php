
<style>
    .sepak-page {
        --sp-primary: #264191;
        --sp-primary-soft: #edf2ff;
        --sp-bg: #f5f7fc;
        --sp-border: #e7ebf3;
        --sp-text: #1d2939;
        --sp-muted: #667085;
        color: var(--sp-text);
        font-family: Inter, system-ui, sans-serif;
        font-size: 14px;
    }

    main.flex-grow-1 > h1:first-of-type,
    main.flex-grow-1 > p:first-of-type {
        display: none !important;
    }

    main.flex-grow-1 {
        background: var(--sp-bg);
        min-width: 0;
    }

    .sepak-page h1,
    .sepak-page h2,
    .sepak-page h3,
    .sepak-page p {
        margin-top: 0;
    }

    .sp-page-head {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 16px;
        margin-bottom: 22px;
    }

    .sp-eyebrow {
        color: var(--sp-muted);
        font-size: 12px;
        margin-bottom: 5px;
    }

    .sp-title {
        color: #18243b;
        font-size: clamp(22px, 2vw, 27px);
        font-weight: 750;
        letter-spacing: -.5px;
        margin-bottom: 6px;
    }

    .sp-subtitle {
        color: var(--sp-muted);
        font-size: 13px;
        margin-bottom: 0;
    }

    .sp-card {
        background: #fff;
        border: 1px solid var(--sp-border);
        border-radius: 13px;
        box-shadow: 0 3px 12px rgba(27, 46, 94, .035);
        min-width: 0;
    }

    .sp-card-pad {
        padding: 18px;
    }

    .sp-card-title {
        font-size: 14px;
        font-weight: 700;
        margin-bottom: 4px;
        color: #202b43;
    }

    .sp-card-note {
        font-size: 12px;
        color: var(--sp-muted);
        margin-bottom: 0;
    }

    .sp-stat-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 13px;
        margin-bottom: 18px;
    }

    .sp-stat {
        padding: 16px;
        display: flex;
        align-items: flex-start;
        gap: 12px;
    }

    .sp-stat-icon {
        width: 38px;
        height: 38px;
        display: grid;
        place-items: center;
        border-radius: 11px;
        background: var(--sp-primary-soft);
        color: var(--sp-primary);
        font-size: 18px;
        flex: 0 0 auto;
    }

    .sp-stat-label {
        color: var(--sp-muted);
        font-size: 12px;
        margin-bottom: 5px;
    }

    .sp-stat-value {
        color: #18243b;
        font-size: 23px;
        line-height: 1.1;
        font-weight: 750;
        margin-bottom: 4px;
    }

    .sp-stat-foot {
        color: var(--sp-muted);
        font-size: 11px;
    }

    .sp-btn {
        border: 1px solid transparent;
        border-radius: 8px;
        padding: 9px 13px;
        font-size: 12px;
        font-weight: 650;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 7px;
        text-decoration: none;
        cursor: pointer;
        white-space: nowrap;
    }

    .sp-btn-primary {
        background: var(--sp-primary);
        color: #fff;
    }

    .sp-btn-primary:hover {
        background: #1e3478;
        color: #fff;
    }

    .sp-btn-outline {
        border-color: #d8deeb;
        color: #344054;
        background: #fff;
    }

    .sp-btn-outline:hover {
        background: #f8faff;
        color: var(--sp-primary);
    }

    .sp-btn-danger {
        background: #fff1f1;
        color: #c03939;
        border-color: #f6d4d4;
    }

    .sp-btn-success {
        background: #eaf8f0;
        color: #16834a;
        border-color: #ccebd9;
    }

    .sp-btn-sm {
        padding: 6px 9px;
        font-size: 11px;
    }

    .sp-toolbar {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
        margin-bottom: 14px;
    }

    .sp-toolbar-group {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 8px;
    }

    .sp-input,
    .sp-select,
    .sp-textarea {
        width: 100%;
        border: 1px solid #dfe4ee;
        background: #fff;
        border-radius: 8px;
        padding: 9px 11px;
        color: #344054;
        font-size: 12px;
        outline: none;
    }

    .sp-input:focus,
    .sp-select:focus,
    .sp-textarea:focus {
        border-color: #8097dc;
        box-shadow: 0 0 0 3px rgba(38,65,145,.09);
    }

    .sp-search {
        min-width: 230px;
    }

    .sp-label {
        display: block;
        color: #344054;
        font-size: 12px;
        font-weight: 650;
        margin-bottom: 6px;
    }

    .sp-field {
        margin-bottom: 14px;
    }

    .sp-help {
        font-size: 11px;
        color: var(--sp-muted);
        margin-top: 5px;
    }

    .sp-table-wrap {
        overflow-x: auto;
    }

    .sp-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        min-width: 760px;
    }

    .sp-table th {
        background: #f8f9fc;
        color: #667085;
        font-size: 10px;
        text-transform: uppercase;
        letter-spacing: .45px;
        font-weight: 700;
        padding: 12px 13px;
        border-bottom: 1px solid var(--sp-border);
        white-space: nowrap;
    }

    .sp-table td {
        padding: 13px;
        color: #344054;
        font-size: 12px;
        border-bottom: 1px solid #eef1f6;
        vertical-align: middle;
    }

    .sp-table tbody tr:last-child td {
        border-bottom: 0;
    }

    .sp-table tbody tr:hover {
        background: #fbfcff;
    }

    .sp-item-name {
        color: #202b43;
        font-weight: 700;
        font-size: 12px;
    }

    .sp-item-code {
        color: #98a2b3;
        font-size: 10px;
        margin-top: 3px;
    }

    .sp-badge {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 5px 8px;
        border-radius: 20px;
        font-size: 10px;
        font-weight: 700;
        white-space: nowrap;
    }

    .sp-badge-green {
        background: #e9f7ef;
        color: #16834a;
    }

    .sp-badge-blue {
        background: #edf2ff;
        color: #264191;
    }

    .sp-badge-yellow {
        background: #fff6df;
        color: #a36b00;
    }

    .sp-badge-red {
        background: #fff0f0;
        color: #c03939;
    }

    .sp-badge-gray {
        background: #f0f2f5;
        color: #596579;
    }

    .sp-two-col {
        display: grid;
        grid-template-columns: minmax(0, 1.65fr) minmax(270px, .9fr);
        gap: 16px;
        align-items: start;
    }

    .sp-three-col {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 13px;
    }

    .sp-divider {
        border: 0;
        border-top: 1px solid #edf0f5;
        margin: 15px 0;
    }

    .sp-muted {
        color: var(--sp-muted);
    }

    .sp-small {
        font-size: 11px;
    }

    .sp-progress {
        height: 7px;
        border-radius: 20px;
        background: #edf0f5;
        overflow: hidden;
    }

    .sp-progress > span {
        display: block;
        height: 100%;
        border-radius: inherit;
        background: var(--sp-primary);
    }

    .sp-list {
        display: flex;
        flex-direction: column;
        gap: 11px;
    }

    .sp-list-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
    }

    .sp-avatar {
        width: 34px;
        height: 34px;
        display: grid;
        place-items: center;
        flex: 0 0 auto;
        border-radius: 10px;
        background: #edf2ff;
        color: var(--sp-primary);
        font-weight: 750;
        font-size: 11px;
    }

    .sp-icon-box {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        display: grid;
        place-items: center;
        background: #f1f4fb;
        color: var(--sp-primary);
        flex: 0 0 auto;
    }

    .sp-info-row {
        display: flex;
        justify-content: space-between;
        gap: 10px;
        padding: 8px 0;
        border-bottom: 1px solid #f0f2f6;
        font-size: 12px;
    }

    .sp-info-row:last-child {
        border-bottom: 0;
    }

    .sp-info-row span:first-child {
        color: var(--sp-muted);
    }

    .sp-info-row strong {
        color: #344054;
        text-align: right;
    }

    .sp-calendar {
        display: grid;
        grid-template-columns: repeat(7, minmax(0, 1fr));
        gap: 5px;
    }

    .sp-calendar-head {
        text-align: center;
        color: #98a2b3;
        font-size: 10px;
        font-weight: 700;
        padding: 7px 0;
    }

    .sp-calendar-day {
        min-height: 62px;
        border: 1px solid #eef1f6;
        border-radius: 8px;
        padding: 7px;
        font-size: 11px;
        color: #475467;
        background: #fff;
    }

    .sp-calendar-day.muted {
        color: #c1c7d0;
        background: #fafbfc;
    }

    .sp-calendar-day.today {
        border-color: #264191;
        background: #f2f5ff;
    }

    .sp-calendar-event {
        display: block;
        margin-top: 5px;
        border-radius: 4px;
        padding: 3px 4px;
        background: #e8edff;
        color: #264191;
        font-size: 9px;
        line-height: 1.2;
    }

    .sp-calendar-event.red {
        background: #fff0f0;
        color: #c03939;
    }

    .sp-step {
        display: flex;
        gap: 10px;
        position: relative;
        padding-bottom: 16px;
    }

    .sp-step:last-child {
        padding-bottom: 0;
    }

    .sp-step-number {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        display: grid;
        place-items: center;
        background: #edf2ff;
        color: var(--sp-primary);
        font-size: 10px;
        font-weight: 800;
        flex: 0 0 auto;
    }

    .sp-step-title {
        font-size: 12px;
        font-weight: 700;
        margin-bottom: 3px;
    }

    .sp-step-text {
        color: var(--sp-muted);
        font-size: 11px;
        line-height: 1.45;
    }

    .sp-request-card {
        padding: 16px;
        border: 1px solid var(--sp-border);
        border-radius: 12px;
        background: #fff;
    }

    .sp-request-top {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 12px;
    }

    .sp-request-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 13px;
        color: var(--sp-muted);
        font-size: 11px;
        margin-top: 9px;
    }

    .sp-timeline {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 5px;
        margin-top: 15px;
    }

    .sp-timeline span {
        height: 5px;
        border-radius: 20px;
        background: #e9edf4;
    }

    .sp-timeline span.done {
        background: #264191;
    }

    .sp-check {
        display: flex;
        align-items: flex-start;
        gap: 8px;
        color: #475467;
        font-size: 12px;
        margin: 10px 0;
    }

    .sp-check input {
        accent-color: #264191;
        margin-top: 2px;
    }

    .sp-photo-placeholder {
        border: 1px dashed #cbd3e1;
        border-radius: 10px;
        min-height: 105px;
        display: grid;
        place-items: center;
        text-align: center;
        color: #98a2b3;
        background: #fafbfe;
        font-size: 11px;
        padding: 12px;
    }

    @media (max-width: 1100px) {
        .sp-stat-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .sp-two-col {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 700px) {
        main.flex-grow-1 {
            padding: 18px !important;
        }

        .sp-page-head {
            flex-direction: column;
        }

        .sp-stat-grid,
        .sp-three-col {
            grid-template-columns: 1fr 1fr;
        }

        .sp-calendar-day {
            min-height: 48px;
            padding: 5px;
        }

        .sp-calendar-event {
            font-size: 8px;
        }
    }

    @media (max-width: 460px) {
        .sp-stat-grid,
        .sp-three-col {
            grid-template-columns: 1fr;
        }

        .sp-search {
            min-width: 100%;
        }
    }
</style>
