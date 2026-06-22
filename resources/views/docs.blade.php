@extends('layouts.app')

@section('title', 'Docs — AdHost')
@section('meta_desc', 'Complete documentation for AdHost Essential add-ons.')

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
  .docs-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin-top: 48px;
  }
  .doc-card {
    background: #fff;
    border: 1px solid #E8E2D9;
    border-radius: 20px;
    padding: 28px 24px;
    transition: all 0.3s;
  }
  .doc-card:hover {
    border-color: rgba(79, 195, 247, 0.3);
    box-shadow: 0 8px 30px rgba(0,0,0,0.05);
    transform: translateY(-2px);
  }
  .doc-card .doc-icon {
    font-size: 1.5rem;
    color: #4FC3F7;
    margin-bottom: 16px;
  }
  .doc-card h3 {
    font-size: 1.1rem;
    font-weight: 600;
    color: #1A1A1A;
    margin-bottom: 8px;
  }
  .doc-card p {
    font-size: 0.85rem;
    color: #8A8A8A;
    line-height: 1.6;
    margin-bottom: 16px;
  }
  .doc-link {
    font-size: 0.85rem;
    font-weight: 600;
    color: #4FC3F7;
    display: inline-flex;
    align-items: center;
    gap: 6px;
  }
  .doc-link:hover { color: #29B6F6; }
  .doc-link i { font-size: 0.7rem; }
  @media (max-width: 640px) {
    .docs-grid { grid-template-columns: 1fr; }
  }
  .docs-category {
    margin-top: 64px;
  }
  .docs-category h3 {
    font-size: 1.3rem;
    font-weight: 600;
    color: #1A1A1A;
    margin-bottom: 16px;
  }
  .docs-category p {
    color: #8A8A8A;
    font-size: 0.9rem;
    line-height: 1.7;
    margin-bottom: 12px;
  }
  .docs-category code {
    background: rgba(79, 195, 247, 0.08);
    padding: 2px 8px;
    border-radius: 4px;
    color: #4FC3F7;
    font-family: 'Inter', monospace;
    font-size: 0.85rem;
  }
</style>
@endpush

@section('content')

<div class="page-header">
  <h1 class="reveal">Documentation</h1>
  <p class="reveal reveal-d1">Complete guide for AdHost Essential.</p>
</div>

<section class="section- rounded-top bg-cream -mt-8">
  <div class="section-inner py-20">
    <div class="section-label reveal">Getting Started</div>
    <h2 class="section-h2 reveal reveal-d1">
      Guides <em class="italic gradient-text">Step by Step</em>
    </h2>

    <div class="docs-grid reveal reveal-d2">
      <div class="doc-card">
        <div class="doc-icon"><i class="fa-solid fa-table-columns"></i></div>
        <h3>Admin Menu</h3>
        <p>Learn how to use the Admin Menu for fast server management.</p>
        <a href="#" class="doc-link">Read Guide <i class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div class="doc-card">
        <div class="doc-icon"><i class="fa-regular fa-comments"></i></div>
        <h3>NPC Dialog</h3>
        <p>Create custom NPC dialogs with interactive menus.</p>
        <a href="#" class="doc-link">Read Guide <i class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div class="doc-card">
        <div class="doc-icon"><i class="fa-solid fa-rotate-left"></i></div>
        <h3>Back to Die</h3>
        <p>Configure the Back to Die feature for your server.</p>
        <a href="#" class="doc-link">Read Guide <i class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div class="doc-card">
        <div class="doc-icon"><i class="fa-solid fa-cart-shopping"></i></div>
        <h3>Custom Shop</h3>
        <p>Set up and customize your player shop system (VIP only).</p>
        <a href="#" class="doc-link">Read Guide <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>

    <div class="docs-category reveal">
      <h3>Quick Setup</h3>
      <p>1. Download the add-on from <a href="{{ url('/free-downloads') }}" style="color:#4FC3F7;">Free Downloads</a></p>
      <p>2. Apply the <code>.mcaddon</code> file to your server behavior packs</p>
      <p>3. Configure settings via the Admin Menu in-game</p>
      <p>4. Custom Shop settings are VIP-only &mdash; upgrade to access</p>
    </div>
  </div>
</section>

@endsection
