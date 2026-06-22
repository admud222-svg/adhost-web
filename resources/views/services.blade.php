@extends('layouts.app')

@section('title', 'Services — AdHost')
@section('meta_desc', 'Custom Bedrock add-on development and server solutions.')

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
  @media (max-width: 640px) {
    .page-header h1 { font-size: 1.8rem; }
  }
  .services-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 48px;
  }
  .service-card {
    background: #fff;
    border: 1px solid #E8E2D9;
    border-radius: 20px;
    padding: 32px 24px;
    text-align: center;
    transition: all 0.3s;
  }
  .service-card:hover {
    border-color: rgba(79, 195, 247, 0.3);
    box-shadow: 0 8px 30px rgba(0,0,0,0.05);
    transform: translateY(-2px);
  }
  .service-card .svc-icon {
    font-size: 2rem;
    color: #4FC3F7;
    margin-bottom: 16px;
  }
  .service-card h3 {
    font-size: 1.1rem;
    font-weight: 600;
    color: #1A1A1A;
    margin-bottom: 8px;
  }
  .service-card p {
    font-size: 0.85rem;
    color: #8A8A8A;
    line-height: 1.6;
  }
  @media (max-width: 768px) {
    .services-grid { grid-template-columns: repeat(2, 1fr); }
  }
  @media (max-width: 480px) {
    .services-grid { grid-template-columns: 1fr; }
  }
</style>
@endpush

@section('content')

<div class="page-header">
  <h1 class="reveal">Services</h1>
  <p class="reveal reveal-d1">Custom development and server solutions.</p>
</div>

<section class="section- rounded-top bg-cream -mt-8">
  <div class="section-inner py-20">
    <div class="services-grid">
      <div class="service-card reveal">
        <div class="svc-icon"><i class="fa-solid fa-puzzle-piece"></i></div>
        <h3>Custom Add-on</h3>
        <p>Custom Bedrock add-on development tailored to your server needs.</p>
      </div>
      <div class="service-card reveal reveal-d1">
        <div class="svc-icon"><i class="fa-solid fa-paint-brush"></i></div>
        <h3>UI Design</h3>
        <p>Custom UI/UX design for your server menus and interfaces.</p>
      </div>
      <div class="service-card reveal reveal-d2">
        <div class="svc-icon"><i class="fa-solid fa-server"></i></div>
        <h3>Server Setup</h3>
        <p>Full server configuration and optimization service.</p>
      </div>
      <div class="service-card reveal reveal-d3">
        <div class="svc-icon"><i class="fa-solid fa-shield"></i></div>
        <h3>Security Audit</h3>
        <p>Server security check and anti-exploit configuration.</p>
      </div>
      <div class="service-card reveal reveal-d4">
        <div class="svc-icon"><i class="fa-solid fa-wrench"></i></div>
        <h3>Bug Fixing</h3>
        <p>Fix compatibility issues and add-on conflicts.</p>
      </div>
      <div class="service-card reveal reveal-d5">
        <div class="svc-icon"><i class="fa-solid fa-graduation-cap"></i></div>
        <h3>Consultation</h3>
        <p>One-on-one consultation for server management.</p>
      </div>
    </div>
  </div>
</section>

@endsection
