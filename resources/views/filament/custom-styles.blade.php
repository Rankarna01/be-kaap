<style>
    /* -------------------------------------------------------------
     * Premium Modern Minimalist SaaS Theme (Inspired by Reference)
     * ------------------------------------------------------------- */

    /* Global Body & Main Background */
    body,
    .fi-layout,
    .fi-main {
        background-color: #f7f9fc !important;
    }

    .fi-topbar {
        background-color: #ffffff !important;
        border-bottom: 1px solid #f1f5f9 !important;
    }

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

    /* Sidebar Container (Pure White with Subtle Border) */
    .fi-sidebar {
        background-color: #ffffff !important;
        border-right: 1px solid #f1f5f9 !important;
        box-shadow: none !important;
    }

    .fi-sidebar-header {
        background-color: #ffffff !important;
        padding-left: 1.25rem !important;
        padding-right: 1rem !important;
        height: 4.5rem !important;
        border-bottom: 1px solid #f8fafc !important;
    }

    .fi-sidebar-header button {
        border-radius: 8px !important;
        color: #94a3b8 !important;
        transition: all 0.15s ease !important;
    }
    .fi-sidebar-header button:hover {
        background-color: #f1f5f9 !important;
        color: #0f172a !important;
    }

    /* Navigation Container */
    .fi-sidebar-nav {
        padding-top: 1.25rem !important;
        padding-bottom: 1rem !important;
        padding-left: 0.85rem !important;
        padding-right: 0.85rem !important;
        gap: 1.25rem !important;
    }

    /* Navigation Group Labels (Subtle & Elegant) */
    .fi-sidebar-group-header {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
        padding-left: 0.5rem !important;
        padding-right: 0.5rem !important;
    }

    .fi-sidebar-group-label {
        font-size: 0.65rem !important;
        font-weight: 700 !important;
        letter-spacing: 0.08em !important;
        text-transform: uppercase !important;
        color: #cbd5e1 !important;
    }

    /* Sidebar Item Base */
    .fi-sidebar-item {
        position: relative;
        margin-bottom: 3px !important;
    }

    .fi-sidebar-item-button {
        padding-top: 0.45rem !important;
        padding-bottom: 0.45rem !important;
        padding-left: 0.75rem !important;
        padding-right: 0.75rem !important;
        border-radius: 0.65rem !important;
        font-size: 0.825rem !important;
        background-color: transparent !important;
        transition: all 0.15s ease !important;
    }

    .fi-sidebar-item-icon {
        width: 1.25rem !important;
        height: 1.25rem !important;
        margin-inline-end: 0.75rem !important;
        transition: color 0.15s ease !important;
    }

    /* Inactive Item Typography & Icon (Soft Slate Grey like reference) */
    .fi-sidebar-item:not(.fi-active) .fi-sidebar-item-label {
        color: #94a3b8 !important;
        font-weight: 500 !important;
    }

    .fi-sidebar-item:not(.fi-active) .fi-sidebar-item-icon {
        color: #94a3b8 !important;
    }

    /* Hover State for Inactive Items */
    .fi-sidebar-item:not(.fi-active) .fi-sidebar-item-button:hover {
        background-color: rgba(241, 245, 249, 0.7) !important;
    }

    .fi-sidebar-item:not(.fi-active) .fi-sidebar-item-button:hover .fi-sidebar-item-label {
        color: #1e293b !important;
    }

    .fi-sidebar-item:not(.fi-active) .fi-sidebar-item-button:hover .fi-sidebar-item-icon {
        color: #0369b1 !important;
    }

    /* ACTIVE ITEM: Left Vertical Pill Bar + Bold Typography (Exact match with reference) */
    .fi-sidebar-item.fi-active::before {
        content: "";
        position: absolute;
        left: -0.85rem;
        top: 50%;
        transform: translateY(-50%);
        width: 4px;
        height: 24px;
        border-radius: 0 4px 4px 0;
        background-color: #0369b1;
        box-shadow: 0 0 8px rgba(3, 105, 177, 0.4);
        z-index: 10;
    }

    .fi-sidebar-item.fi-active .fi-sidebar-item-button {
        background-color: rgba(3, 105, 177, 0.05) !important;
    }

    .fi-sidebar-item.fi-active .fi-sidebar-item-label {
        color: #0f172a !important;
        font-weight: 700 !important;
    }

    .fi-sidebar-item.fi-active .fi-sidebar-item-icon {
        color: #0369b1 !important;
    }
</style>
