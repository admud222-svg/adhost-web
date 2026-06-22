@extends('layouts.app')

@section('title', 'Changelog — AdHost')
@section('meta_desc', 'Release notes and version history for AdHost Essential.')

@push('styles')
<style>
  .page-header {
    background: #1C2333;
    padding-top: 120px;
    padding-bottom: 60px;
    text-align: center;
  }
  .page-header h1 {
    font-size: 2.5rem;
    font-weight: 600;
    color: #fff;
    margin-bottom: 12px;
  }
  .page-header p {
    color: rgba(255,255,255,0.55);
    font-size: 1rem;
  }
  @media (max-width: 640px) {
    .page-header h1 { font-size: 1.8rem; }
  }
  .changelog-list {
    max-width: 700px;
    margin: 0 auto;
  }
  .cl-item {
    background: #fff;
    border: 1px solid #E8E2D9;
    border-radius: 16px;
    padding: 24px;
    margin-bottom: 16px;
    transition: all 0.3s;
  }
  .cl-item:hover {
    border-color: rgba(79, 195, 247, 0.3);
    box-shadow: 0 4px 16px rgba(0,0,0,0.04);
  }
  .cl-head {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 12px;
  }
  .cl-version {
    font-size: 1.1rem;
    font-weight: 700;
    color: #1A1A1A;
  }
  .cl-date {
    font-size: 0.8rem;
    color: #B0A89E;
  }
  .cl-badge {
    font-size: 10px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    padding: 3px 10px;
    border-radius: 999px;
  }
  .cl-badge-new { background: #4FC3F7; color: #fff; }
  .cl-badge-update { background: #FFC107; color: #1A1A1A; }
  .cl-badge-fix { background: #F44336; color: #fff; }
  .cl-body { font-size: 0.9rem; color: #5A5A5A; line-height: 1.7; }
  .cl-body ul { list-style: none; padding: 0; }
  .cl-body li {
    padding: 4px 0;
    padding-left: 20px;
    position: relative;
  }
  .cl-body li::before {
    content: '';
    position: absolute;
    left: 4px;
    top: 12px;
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #4FC3F7;
    opacity: 0.5;
  }
</style>
@endpush

@section('content')

<div class="page-header">
  <h1 class="reveal">Changelog</h1>
  <p class="reveal reveal-d1">Release notes and version history.</p>
</div>

<section class="section- rounded-top bg-cream -mt-8">
  <div class="section-inner py-20">
    <div class="changelog-list">
      <div class="cl-item reveal">
        <div class="cl-head">
          <span class="cl-version">v2.1.0</span>
          <span class="cl-badge cl-badge-new">New</span>
          <span class="cl-date">June 22, 2026</span>
        </div>
        <div class="cl-body">
          <ul>
            <li>Added Custom Shop UI with full customization</li>
            <li>New Admin Menu design with dark mode</li>
            <li>Performance optimization for large servers</li>
          </ul>
        </div>
      </div>

      <div class="cl-item reveal reveal-d1">
        <div class="cl-head">
          <span class="cl-version">v2.0.1</span>
          <span class="cl-badge cl-badge-fix">Fix</span>
          <span class="cl-date">June 15, 2026</span>
        </div>
        <div class="cl-body">
          <ul>
            <li>Fixed NPC Dialog crash on join</li>
            <li>Fixed Anti Dupe false positive with anvils</li>
            <li>Improved member permission system</li>
          </ul>
        </div>
      </div>

      <div class="cl-item reveal reveal-d2">
        <div class="cl-head">
          <span class="cl-version">v2.0.0</span>
          <span class="cl-badge cl-badge-update">Update</span>
          <span class="cl-date">June 1, 2026</span>
        </div>
        <div class="cl-body">
          <ul>
            <li>Major rewrite of core systems</li>
            <li>New Back to Die feature for VIP+</li>
            <li>Whitelist management system</li>
            <li>Custom Shop beta release</li>
          </ul>
        </div>
      </div>

      <div class="cl-item reveal reveal-d3">
        <div class="cl-head">
          <span class="cl-version">v1.1.0</span>
          <span class="cl-badge cl-badge-update">Update</span>
          <span class="cl-date">May 20, 2026</span>
        </div>
        <div class="cl-body">
          <ul>
            <li>Added member roles and permissions</li>
            <li>Performance booster module</li>
            <li>Bug fixes and stability improvements</li>
          </ul>
        </div>
      </div>

      <div class="cl-item reveal reveal-d4">
        <div class="cl-head">
          <span class="cl-version">v1.0.0</span>
          <span class="cl-badge cl-badge-new">New</span>
          <span class="cl-date">May 1, 2026</span>
        </div>
        <div class="cl-body">
          <ul>
            <li>Initial release of AdHost Essential</li>
            <li>Admin Menu with quick actions</li>
            <li>NPC Dialog system</li>
            <li>Basic management tools</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
