@extends('layouts.app')

@section('title', 'Dashboard — AdHost')

@push('styles')
<style>
  .auth-page {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #1C2333;
    padding: 24px;
    padding-top: 96px;
  }
  .auth-card {
    background: #fff;
    border-radius: 24px;
    padding: 48px 40px;
    max-width: 420px;
    width: 100%;
    text-align: center;
  }
  .auth-card .auth-logo {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 24px;
  }
  .auth-card .auth-logo span {
    font-size: 1.2rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    color: #1A1A1A;
  }
  .auth-card h1 {
    font-size: 1.5rem;
    font-weight: 600;
    color: #1A1A1A;
    margin-bottom: 8px;
  }
  .auth-card p {
    font-size: 0.9rem;
    color: #8A8A8A;
    margin-bottom: 32px;
    line-height: 1.6;
  }
  .btn-google {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    width: 100%;
    padding: 14px 24px;
    border-radius: 999px;
    background: #1A1A1A;
    color: #fff;
    font-size: 0.95rem;
    font-weight: 600;
    border: none;
    cursor: pointer;
    font-family: inherit;
    transition: background 0.3s;
  }
  .btn-google:hover { background: #333; }
  .btn-google img { width: 20px; height: 20px; }
  .auth-divider {
    display: flex;
    align-items: center;
    gap: 16px;
    margin: 24px 0;
    color: #B0A89E;
    font-size: 0.8rem;
  }
  .auth-divider::before,
  .auth-divider::after {
    content: '';
    flex: 1;
    height: 1px;
    background: #E8E2D9;
  }
  .auth-back {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #8A8A8A;
    font-size: 0.85rem;
    margin-bottom: 24px;
    transition: color 0.3s;
  }
  .auth-back:hover { color: #4FC3F7; }
  .dash-page {
    min-height: 100vh;
    background: #1C2333;
    padding-top: 96px;
  }
  .dash-inner {
    max-width: 800px;
    margin: 0 auto;
    padding: 48px 24px;
  }
  .dash-header {
    margin-bottom: 32px;
  }
  .dash-header h1 {
    font-size: 2rem;
    font-weight: 600;
    color: #fff;
    margin-bottom: 8px;
  }
  .dash-header p {
    color: rgba(255,255,255,0.55);
    font-size: 0.95rem;
  }
  .dash-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
  }
  .dash-card {
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 16px;
    padding: 24px;
    transition: all 0.3s;
  }
  .dash-card:hover {
    background: rgba(255,255,255,0.09);
    border-color: rgba(79, 195, 247, 0.2);
  }
  .dash-card .dash-icon {
    font-size: 1.5rem;
    color: #4FC3F7;
    margin-bottom: 12px;
  }
  .dash-card h3 {
    font-size: 1rem;
    font-weight: 600;
    color: #fff;
    margin-bottom: 4px;
  }
  .dash-card p {
    font-size: 0.85rem;
    color: rgba(255,255,255,0.45);
  }
  .dash-logout {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: rgba(255,255,255,0.45);
    font-size: 0.85rem;
    margin-top: 32px;
    transition: color 0.3s;
  }
  .dash-logout:hover { color: #F44336; }
  @media (max-width: 640px) {
    .dash-grid { grid-template-columns: 1fr; }
    .dash-header h1 { font-size: 1.5rem; }
  }
</style>
@endpush

@section('content')

@auth
<div class="dash-page">
  <div class="dash-inner">
    <div class="dash-header">
      <h1>Welcome back, {{ Auth::user()->name }}</h1>
      <p>{{ Auth::user()->email }}</p>
    </div>
    <div class="dash-grid">
      <div class="dash-card">
        <div class="dash-icon"><i class="fa-solid fa-cube"></i></div>
        <h3>My Add-ons</h3>
        <p>Manage your purchased add-ons and licenses.</p>
      </div>
      <div class="dash-card">
        <div class="dash-icon"><i class="fa-solid fa-download"></i></div>
        <h3>Downloads</h3>
        <p>Access your premium downloads and updates.</p>
      </div>
      <div class="dash-card">
        <div class="dash-icon"><i class="fa-solid fa-ticket"></i></div>
        <h3>Support</h3>
        <p>Open a support ticket or check your requests.</p>
      </div>
      <div class="dash-card">
        <div class="dash-icon"><i class="fa-solid fa-gear"></i></div>
        <h3>Settings</h3>
        <p>Manage your account and preferences.</p>
      </div>
    </div>
    <a href="{{ url('/logout') }}" class="dash-logout"><i class="fa-solid fa-arrow-right-from-bracket"></i> Sign Out</a>
  </div>
</div>
@else
<div class="auth-page">
  <div class="auth-card reveal">
    <a href="{{ url('/') }}" class="auth-back"><i class="fa-solid fa-arrow-left"></i> Back</a>
    <div class="auth-logo">
      <svg viewBox="0 0 100 100" width="32" height="32">
        <rect x="15" y="30" width="70" height="50" rx="8" fill="#4FC3F7"/>
        <rect x="22" y="40" width="56" height="30" rx="4" fill="#1a1a2e"/>
        <circle cx="50" cy="55" r="10" fill="#4FC3F7"/>
        <path d="M46 55l4 4 8-8" fill="none" stroke="#1a1a2e" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      <span>AdHost</span>
    </div>
    <h1>Sign in to your account</h1>
    <p>Manage your server and access your add-ons from one dashboard.</p>
    <a href="{{ url('/auth/google/redirect') }}" class="btn-google">
      <svg viewBox="0 0 48 48" width="20" height="20">
        <path fill="#FFC107" d="M43.611 20.083H42V20H24v8h11.303c-1.649 4.657-6.08 8-11.303 8-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4 12.955 4 4 12.955 4 24s8.955 20 20 20 20-8.955 20-20c0-1.341-.138-2.65-.389-3.917z"/>
        <path fill="#FF3D00" d="M6.306 14.691l6.571 4.819C14.655 15.108 18.961 12 24 12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4 16.318 4 9.656 8.337 6.306 14.691z"/>
        <path fill="#4CAF50" d="M24 44c5.166 0 9.86-1.977 13.409-5.192l-6.19-5.238A11.91 11.91 0 0124 36c-5.202 0-9.619-3.317-11.283-7.946l-6.522 5.025C9.505 39.556 16.227 44 24 44z"/>
        <path fill="#1976D2" d="M43.611 20.083H42V20H24v8h11.303a12.04 12.04 0 01-4.087 5.571l.003-.002 6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.65-.389-3.917z"/>
      </svg>
      Continue with Google
    </a>
    <div class="auth-divider">Secure access with your Google account.</div>
  </div>
</div>
@endauth

@endsection
