<style>
    /* Brand Logo in Sidebar Header */
    .fi-logo {
        border-radius: 9px;
        object-fit: contain;
        box-shadow: 0 2px 6px -1px rgba(0, 0, 0, 0.08);
        border: 1px solid rgba(0, 0, 0, 0.06);
        transition: transform 0.15s ease;
    }
    .fi-logo:hover {
        transform: scale(1.03);
    }

    /* Compact & Sleek Sidebar Styling */
    .fi-sidebar-header {
        padding-left: 1.15rem !important;
        padding-right: 1rem !important;
        height: 4.25rem !important;
        border-bottom: 1px solid rgba(226, 232, 240, 0.8);
    }

    .fi-sidebar-nav {
        padding-top: 1rem !important;
        padding-bottom: 1.5rem !important;
        padding-left: 0.75rem !important;
        padding-right: 0.75rem !important;
        gap: 1.25rem !important;
    }

    /* Ramping Navigation Groups & Items */
    .fi-sidebar-group-header {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
        padding-left: 0.5rem !important;
        padding-right: 0.5rem !important;
    }

    .fi-sidebar-group-label {
        font-size: 0.6875rem !important;
        font-weight: 700 !important;
        letter-spacing: 0.05em !important;
        text-transform: uppercase !important;
        color: #64748b !important;
    }

    .fi-sidebar-item-button {
        padding-top: 0.425rem !important;
        padding-bottom: 0.425rem !important;
        padding-left: 0.65rem !important;
        padding-right: 0.65rem !important;
        border-radius: 0.6rem !important;
        font-size: 0.8125rem !important;
        font-weight: 500 !important;
        margin-bottom: 2px !important;
        transition: all 0.15s ease !important;
    }

    .fi-sidebar-item-icon {
        width: 1.25rem !important;
        height: 1.25rem !important;
        margin-inline-end: 0.65rem !important;
    }

    /* Subtle active item highlight */
    .fi-sidebar-item-active .fi-sidebar-item-button {
        background-color: #f0f7fd !important;
        color: #0369b1 !important;
        font-weight: 600 !important;
    }

    /* Toggler Button */
    .fi-sidebar-header button {
        border-radius: 8px !important;
        transition: background-color 0.15s ease !important;
    }
    .fi-sidebar-header button:hover {
        background-color: #f1f5f9 !important;
    }
</style>
