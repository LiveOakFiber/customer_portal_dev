@php use App\Http\Controllers\ContractController; @endphp
@extends('layouts.full')
@section('content')
<!-- HEADER -->
<div class="header index-bg pb-5">
   <div class="container-fluid">
      <!-- Body -->
      <div class="header-body-nb">
         <div class="row align-items-end">
            <div class="col">
               <!-- Pretitle -->
               <h6 class="header-pretitle text-secondary-light">
                Terms and Conditions
               </h6>
               <!-- Title -->
               <h1 class="header-title text-white">
               What you need to know
               </h1>
            </div>
            <div class="col-auto">
                <ul class="nav nav-tabs header-tabs">
                    <li class="nav-item">
                        <a class="nav-link text-right">
                            <h6 class="header-pretitle text-secondary-light">&nbsp;</h6>
                            <h3 class="text-white mb-0">&nbsp;</h3>
                        </a>
                    </li>
                </ul>
            </div>
         </div>
         <!-- / .row -->
      </div>
      <!-- / .header-body -->
      <!-- Footer -->
      <div class="header-footer">
      </div>
   </div>
</div>
<!-- / .header -->
   <div class="container-fluid">
      <div class="row justify-content-center">
         <div class="col-12">
            <div class="card mt-4">
               <div class="card-header">
                  <h4 class="card-title text-muted mt-3">
                     {{utrans("headers.contracts")}}
                  </h4>
               </div>
               <div class="table-responsive">
                  <table class="table card-table">
                     <thead>
                     <tr>
                        <th>{{utrans("contracts.name")}}</th>
                        <th>{{utrans("contracts.status")}}</th>
                        <th>{{utrans("contracts.action")}}</th>
                     </tr>
                     </thead>
                     <tbody>
                     @if(count($contracts) == 0)
                        <TR>
                           <TD colspan="3">{{utrans("contracts.noContracts")}}</TD>
                        </TR>
                     @endif
                     @foreach($contracts as $contract)
                        <tr @if($contract->getAcceptanceDatetime() == null) class="warning"
                            @else class="success" @endif>
                           <TD>{{$contract->getContractName()}}</TD>
                           <TD>@if($contract->getAcceptanceDatetime() == null)
                                 {{utrans("contracts.pendingSignature")}}
                              @else
                                 {{utrans("contracts.signed")}}
                              @endif</TD>
                           <TD>@if($contract->getAcceptanceDatetime() == null)
                                 <a href="{{$contract->generateSignatureLink()}}" target="_blank">
                                    <button class="btn btn-primary btn-sm"><i
                                               class="fe fe-pencil mr-2"></i>{{utrans("contracts.sign")}}</button>
                                 </a>
                              @else
                                 <a href="{{action([ContractController::class, 'downloadContractPdf'],['contracts' => $contract->getId()])}}">
                                    <button class="btn btn-sm btn-light"><i
                                               class="fe fe-file mr-2"></i>{{utrans("contracts.download")}}</button>
                                 </a>
                              @endif</TD>
                        </tr>
                     @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
@endsection
