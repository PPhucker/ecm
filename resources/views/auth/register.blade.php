@extends('layouts.app')
@section('content')
    <x-card
        :title="__('auth.register.action')"
        :back="route('users.index')">
        <x-notification.alert/>
        <x-form
            :route="route('register')"
            formId="users_register_form">
            <x-form.row>
                <x-slot name="label">
                    <x-form.label
                        forId="name"
                        :text="__('users.name')"/>
                </x-slot>
                <x-form.element.input
                    id="name"
                    name="name"
                    :value="old('name')"
                    :required="true"/>
            </x-form.row>
            <x-form.row>
                <x-slot name="label">
                    <x-form.label
                        forId="email"
                        text="Email"/>
                </x-slot>
                <x-form.element.input
                    id="email"
                    name="email"
                    type="email"
                    :value="old('email')"
                    :required="true"/>
            </x-form.row>
            <x-form.row>
                <x-slot name="label">
                    <x-form.label
                        forId="password"
                        :text="__('auth.passwords.password')"/>
                </x-slot>
                <x-form.element.input
                    id="password"
                    name="password"
                    type="password"
                    :required="true"/>
            </x-form.row>
            <x-form.row>
                <x-slot name="label">
                    <x-form.label
                        forId="password-confirm"
                        :text="__('auth.passwords.confirm.action')"/>
                </x-slot>
                <x-form.element.input
                    id="password-confirm"
                    name="password_confirmation"
                    type="password"
                    :required="true"/>
            </x-form.row>
            <x-form.row>
                <x-slot name="label">
                    <x-form.label
                        forId="roles"
                        :text="__('auth.roles')"/>
                </x-slot>
                <div class="col-md-6 pt-2">
                    @foreach($roles as $role)
                        <div class="form-check form-switch ps-1">
                            <x-form.element.input
                                type="checkbox"
                                name="roles[]"
                                class="form-check-input"
                                :id="$role->slug"
                                :value="$role->slug"/>
                            <label class="form-check-label"
                                   for="{{$role->slug}}">
                                {{$role->name}}
                            </label>
                        </div>
                    @endforeach
                </div>
            </x-form.row>
            <x-form.row>
                <x-slot name="label">
                    <x-form.label
                        forId="permissions"
                        :text="__('auth.permissions')"/>
                </x-slot>
                <div class="col-md-6 pt-2">
                    @foreach($permissions as $permission)
                        <div class="form-check form-switch ps-1">
                            <x-form.element.input
                                type="checkbox"
                                name="permissions[]"
                                class="form-check-input"
                                :id="$permission->slug"
                                :value="$permission->slug"/>
                            <label class="form-check-label"
                                   for="{{$permission->slug}}">
                                {{$permission->name}}
                            </label>
                        </div>
                    @endforeach
                </div>
            </x-form.row>
            <footer class="mt-auto me-auto ps-2">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <x-form.button.save formId="users_register_form"
                                            :text="__('auth.register.button')"/>
                    </li>
                </ul>
            </footer>
        </x-form>
    </x-card>
@endsection
