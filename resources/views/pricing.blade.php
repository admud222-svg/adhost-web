@extends('layouts.app')

@section('title', 'Pricing — AdHost')
@section('meta_desc', 'Choose the right plan for your server. Free, VIP, or MVP.')

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
</style>
@endpush

@section('content')

<div class="page-header">
  <h1 class="reveal">Pricing</h1>
  <p class="reveal reveal-d1">Choose a plan that fits your needs.</p>
</div>

<section class="section- rounded-top bg-cream -mt-8">
  <div class="section-inner py-20">
    <div class="pricing-grid reveal">
      <div class="price-card">
        <div class="price-header">
          <h3>Free</h3>
          <div class="price-val">Rp 0</div>
          <span class="price-period">/mo</span>
        </div>
        <ul class="price-feats">
          <li><i class="fa-regular fa-circle-check check"></i> Free Add-on</li>
          <li><i class="fa-regular fa-circle-check check"></i> Community</li>
          <li><i class="fa-regular fa-circle-check check"></i> Basic Management</li>
          <li><i class="fa-regular fa-circle-check check"></i> BDS + Realms</li>
          <li><i class="fa-regular fa-circle-check cross"></i> Premium Add-ons</li>
          <li><i class="fa-regular fa-circle-check cross"></i> Anti Dupe</li>
          <li><i class="fa-regular fa-circle-check cross"></i> Custom Shop</li>
          <li><i class="fa-regular fa-circle-check cross"></i> Priority Support</li>
        </ul>
      </div>
      <div class="price-card price-featured">
        <div class="price-badge">POPULAR</div>
        <div class="price-header">
          <h3>VIP</h3>
          <div class="price-val">Rp 35K</div>
          <span class="price-period">/mo</span>
        </div>
        <ul class="price-feats">
          <li><i class="fa-regular fa-circle-check check"></i> All Free Features</li>
          <li><i class="fa-regular fa-circle-check check"></i> Premium Add-ons</li>
          <li><i class="fa-regular fa-circle-check check"></i> Anti Dupe</li>
          <li><i class="fa-regular fa-circle-check check"></i> Custom Shop</li>
          <li><i class="fa-regular fa-circle-check check"></i> Custom UI</li>
          <li><i class="fa-regular fa-circle-check check"></i> Whitelist</li>
          <li><i class="fa-regular fa-circle-check check"></i> Priority Support</li>
          <li><i class="fa-regular fa-circle-check cross"></i> Early Access</li>
        </ul>
      </div>
      <div class="price-card">
        <div class="price-header">
          <h3>MVP</h3>
          <div class="price-val">Rp 75K</div>
          <span class="price-period">/mo</span>
        </div>
        <ul class="price-feats">
          <li><i class="fa-regular fa-circle-check check"></i> All VIP Features</li>
          <li><i class="fa-regular fa-circle-check check"></i> Early Access</li>
          <li><i class="fa-regular fa-circle-check check"></i> All Premium Add-ons</li>
          <li><i class="fa-regular fa-circle-check check"></i> Custom Shop UI</li>
          <li><i class="fa-regular fa-circle-check check"></i> Discord Role</li>
          <li><i class="fa-regular fa-circle-check check"></i> Lifetime Access</li>
          <li><i class="fa-regular fa-circle-check check"></i> 24/7 Support</li>
          <li><i class="fa-regular fa-circle-check check"></i> Beta Features</li>
        </ul>
      </div>
    </div>
  </div>
</section>

@endsection
