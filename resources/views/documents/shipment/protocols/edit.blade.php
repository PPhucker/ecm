@php use Illuminate\Support\Carbon; @endphp
@extends('layouts.app')
@section('content')
    <x-forms.main back="{{route('protocols.index')}}"
                  title="
                  {{__('documents.shipment.protocols.protocol')
                    . ' №'
                    . $protocol->number
                    . ' '
                    . $protocol->date}}
                  ">
        <x-forms.collapse.card
            route="{{route('protocols.update', ['protocol' => $protocol->id])}}"
            cardId="card_main_info"
            formId="form_main_info"
            title="{{__('documents.header')}}">
            <x-slot name="cardBody">
                <div class="row mb-2">
                    <label for="number"
                           class="col-md-4 col-form-label text-md-end">
                        {{__('documents.shipment.number')}}
                    </label>
                    <div class="col-md-6">
                        <input id="number"
                               type="text"
                               name="number"
                               class="form-control form-control-sm text-primary
                           @error('number') is-invalid @enderror"
                               value="{{$protocol->number}}"
                               required>
                        <x-forms.span-error name="number"/>
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="date"
                           class="col-md-4 col-form-label text-md-end">
                        {{__('documents.shipment.date')}}
                    </label>
                    <div class="col-md-6">
                        <input id="date"
                               type="date"
                               name="date"
                               class="form-control form-control-sm text-primary
                           @error('date') is-invalid @enderror"
                               value="{{Carbon::create($protocol->date)->format('Y-m-d')}}"
                               required>
                        <x-forms.span-error name="date"/>
                    </div>
                </div>
                @if ($protocol->approved !== null)
                    <div class="row mb-2">
                        <label for=""
                               class="col-md-4 col-form-label text-md-end">
                            {{__('documents.shipment.approved')}}
                        </label>
                        <div class="col-md-6">
                            <div class="input-group input-group-sm">
                                <span
                                    class="input-group-text text-center align-middle bg-transparent fw-bold border-0">
                                @if($protocol->approved)
                                        <i class="bi bi-shield-check text-success" style="font-size: 1.5em"></i>
                                    @else
                                        <i class="bi bi-shield-exclamation text-danger" style="font-size: 1.5em"></i>
                                    @endif
                                </span>
                                <span class="input-group-text text-primary text-center align-middle bg-transparent border-0">
                                    {{$protocol->approvedBy->name}}
                                </span>
                                <span class="input-group-text text-primary text-center align-middle bg-transparent border-0">
                                    {{$protocol->approved_at}}
                                </span>
                            </div>
                        </div>
                    </div>
                @endif
                @if (!$protocol->approved && $protocol->approved !== null)
                    <div class="row mb-2">
                        <label for=""
                               class="col-md-4 col-form-label text-md-end">
                            {{__('documents.shipment.comment')}}
                        </label>
                        <div class="col-md-6">
                            <textarea class="form-control form-control-sm fw-bolder text-danger bg-transparent"
                                      placeholder="{{__('documents.shipment.comment')}}" rows="1"
                                      disabled>{{trim($protocol->comment)}}</textarea>
                        </div>
                    </div>
                @endif
            </x-slot>
            <x-slot name="footer">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item text-md-end">
                        <x-buttons.save formId="form_main_info"/>
                    </li>
                    <li class="list-inline-item text-primary">
                        <small>
                            {{__('form.last_updated')}}:
                        </small>
                    </li>
                    <li class="list-inline-item text-primary">
                        <small>
                            {{$protocol->updated_at}}
                        </small>
                    </li>
                    <li class="list-inline-item text-primary">
                        <small>
                            {{$protocol->updatedBy->name}}
                        </small>
                    </li>
                </ul>
            </x-slot>
        </x-forms.collapse.card>
    </x-forms.main>
@endsection
