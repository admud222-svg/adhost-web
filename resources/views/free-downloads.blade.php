@extends('layouts.app')

@section('title', 'Free Downloads — AdHost')
@section('meta_desc', 'Download AdHost Essential free Bedrock add-ons. Try before you buy.')

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
    max-width: 500px;
    margin: 0 auto;
  }
  .downloads-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin-top: 48px;
  }
  .download-card {
    background: #fff;
    border: 1px solid #E8E2D9;
    border-radius: 20px;
    padding: 28px 24px;
    display: flex;
    flex-direction: column;
    transition: all 0.3s;
  }
  .download-card:hover {
    border-color: rgba(79, 195, 247, 0.3);
    box-shadow: 0 8px 30px rgba(0,0,0,0.05);
    transform: translateY(-2px);
  }
  .download-card .dl-icon {
    font-size: 1.5rem;
    color: #4FC3F7;
    margin-bottom: 16px;
  }
  .download-card h3 {
    font-size: 1.1rem;
    font-weight: 600;
    color: #1A1A1A;
    margin-bottom: 6px;
  }
  .download-card p {
    font-size: 0.85rem;
    color: #8A8A8A;
    flex: 1;
    line-height: 1.6;
    margin-bottom: 16px;
  }
  .dl-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #4FC3F7;
    color: #fff;
    padding: 10px 20px;
    border-radius: 999px;
    font-size: 0.85rem;
    font-weight: 600;
    align-self: flex-start;
    transition: background 0.3s;
  }
  .dl-btn:hover { background: #29B6F6; }
  @media (max-width: 640px) {
    .downloads-grid { grid-template-columns: 1fr; }
    .page-header h1 { font-size: 1.8rem; }
  }
</style>
@endpush

@section('content')

<div class="page-header">
  <h1 class="reveal">Free Downloads</h1>
  <p class="reveal reveal-d1">Try AdHost Essential for free. No strings attached.</p>
</div>

<section class="section- rounded-top bg-cream -mt-8">
  <div class="section-inner py-20">
    <div class="downloads-grid reveal">
      <div class="download-card">
        <div class="dl-icon"><i class="fa-solid fa-cube"></i></div>
        <h3>AdHost Essential Free</h3>
        <p>Basic server management tools including admin menu, member management, and performance optimization.</p>
        <a href="#" class="dl-btn"><i class="fa-solid fa-download"></i> Download .mcaddon</a>
      </div>
      <div class="download-card">
        <div class="dl-icon"><i class="fa-regular fa-comments"></i></div>
        <h3>NPC Dialog Free</h3>
        <p>Custom NPC dialog system with basic interactive menus for your server.</p>
        <a href="#" class="dl-btn"><i class="fa-solid fa-download"></i> Download .mcaddon</a>
      </div>
      <div class="download-card">
        <div class="dl-icon"><i class="fa-solid fa-shield-halved"></i></div>
        <h3>Anti Dupe Lite</h3>
        <p>Basic item duplication prevention for your Bedrock server.</p>
        <a href="#" class="dl-btn"><i class="fa-solid fa-download"></i> Download .mcpack</a>
      </div>
      <div class="download-card">
        <div class="dl-icon"><i class="fa-solid fa-gauge-high"></i></div>
        <h3>Performance Booster</h3>
        <p>Lightweight optimization tools to reduce lag and improve server performance.</p>
        <a href="#" class="dl-btn"><i class="fa-solid fa-download"></i> Download .mcpack</a>
      </div>
    </div>
  </div>
</section>

@endsection
