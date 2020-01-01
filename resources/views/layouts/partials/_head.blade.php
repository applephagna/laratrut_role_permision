<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <title>Klorofil Pro - Bootstrap Admin Dashboard</title>
  <!-- VENDOR CSS -->
  <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/themify-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/pace/themes/orange/pace-theme-minimal.css')}}">
  <!-- MAIN CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/main.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/skins/sidebar-nav-darkgray.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('assets/css/skins/navbar3.css')}}" type="text/css">
  <!-- ICONS -->
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/img/favicon.png')}}">
	</head>