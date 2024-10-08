@extends('layouts.app')
@section('content')
    <x-card
        :title="__('classifiers.nomenclature.products.titles.create')"
        :back="route('end_products.index')">
        <x-form
            formId="end_product_add_form"
            :route="route('end_products.store')">
            <x-form.row>
                <x-slot name="label">
                    <x-form.label
                        forId="short_name"
                        :text="__('classifiers.nomenclature.products.short_name')"/>
                </x-slot>
                <x-form.element.input
                    id="short_name"
                    name="short_name"
                    :required="true"
                    max="50"/>
            </x-form.row>
            <x-form.row>
                <x-slot name="label">
                    <x-form.label
                        forId="full_name"
                        :text="__('classifiers.nomenclature.products.full_name')"/>
                </x-slot>
                <x-form.element.input
                    id="full_name"
                    name="full_name"
                    :required="true"
                    max="255"/>
            </x-form.row>
            <x-form.row>
                <x-slot name="label">
                    <x-form.label
                        forId="international_name_id"
                        :text="__('classifiers.nomenclature.products.international_names_of_end_products.international_name_of_end_product')"/>
                </x-slot>
                <x-form.element.select
                    id="international_name_id"
                    name="international_name_id">
                    @foreach($internationalNames as $internationalName)
                        <x-form.element.option
                            :text="$internationalName->name"
                            :value="$internationalName->id"/>
                    @endforeach
                </x-form.element.select>
            </x-form.row>
            <x-form.row>
                <x-slot name="label">
                    <x-form.label
                        forId="okpd2_code"
                        :text="__('classifiers.nomenclature.products.okpd2.okpd2')"/>
                </x-slot>
                <x-form.element.select
                    id="okpd2_code"
                    name="okpd2_code">
                    @foreach($okpd2Classifier as $okpd2)
                        <x-form.element.option
                            :text="$okpd2->code . ' ' . $okpd2->name"
                            :value="$okpd2->code"/>
                    @endforeach
                </x-form.element.select>
            </x-form.row>
            <x-form.row>
                <x-slot name="label">
                    <x-form.label
                        forId="type_id"
                        :text="__('classifiers.nomenclature.products.types_of_end_products.type_of_end_product')"/>
                </x-slot>
                <x-form.element.select
                    id="type_id"
                    name="type_id">
                    @foreach($types as $type)
                        <x-form.element.option
                            :text="$type->name"
                            :value="$type->id"/>
                    @endforeach
                </x-form.element.select>
            </x-form.row>
            <x-form.row>
                <x-slot name="label">
                    <x-form.label
                        forId="registration_number_id"
                        :text="__('classifiers.nomenclature.products.registration_numbers.registration_number')"/>
                </x-slot>
                <x-form.element.select
                    id="registration_number_id"
                    name="registration_number_id">
                    <x-form.element.option
                        :value="null"
                        :text="__('classifiers.nomenclature.products.registration_numbers.without_registration_number')"/>
                    @foreach($registrationNumbers as $number)
                        <x-form.element.option
                            :text="$number->number"
                            :value="$number->id"/>
                    @endforeach
                </x-form.element.select>
            </x-form.row>
            <x-form.row>
                <x-slot name="label">
                    <x-form.label
                        forId="okei_code"
                        :text="__('classifiers.nomenclature.okei.unit')"/>
                </x-slot>
                <x-form.element.select
                    id="okei_code"
                    name="okei_code">
                    @foreach($okeiClassifier as $okei)
                        <x-form.element.option
                            :text="$okei->code . ' ' . $okei->unit"
                            :value="$okei->code"/>
                    @endforeach
                </x-form.element.select>
            </x-form.row>
            <x-form.row>
                <x-slot name="label">
                    <x-form.label
                        forId="best_before_date"
                        :text="__('classifiers.nomenclature.products.best_before_date')"/>
                </x-slot>
                <x-form.element.input
                    id="best_before_date"
                    name="best_before_date"
                    :required="true"
                    min="1"/>
            </x-form.row>
            <x-form.row>
                <x-slot name="label">
                    <x-form.label
                        forId="marking"
                        :text="__('classifiers.nomenclature.products.marking.marking')"/>
                </x-slot>
                <x-form.element.select
                    id="marking"
                    name="marking">
                    <x-form.element.option
                        :text="__('classifiers.nomenclature.products.marking.yes')"
                        value="1"/>
                    <x-form.element.option
                        :text="__('classifiers.nomenclature.products.marking.no')"
                        value="0"/>
                </x-form.element.select>
            </x-form.row>
            <footer class="mt-auto me-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <x-form.button.save formId="end_product_add_form"/>
                    </li>
                </ul>
            </footer>
        </x-form>
    </x-card>
@endsection
