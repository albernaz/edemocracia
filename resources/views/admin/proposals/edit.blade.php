@extends('layouts.admin')

@section('title', 'Editar Proposta Legislativa')

@section('content')

    <div class="row">
        <div class="col-md-12">

            @include('partials.error')

            <div class="panel panel-default">
                <div class="panel-heading text-center"><strong>Editar Proposta Legislativa</strong></div>
                <div class="panel-body">

                    {{ Form::model($proposal, [
                    'method' => 'PATCH',
                    'route' => ['admin.proposal.update', $proposal->id],
                    'class' => 'form'
                    ]) }}

                    <div class="form-group coluna_02">
                        {{ Form::label('Nome da Proposta') }}
                        {{ Form::text('name', null,
                            array('required',
                                  'class'=>'campo',
                                  'placeholder'=>'Nome')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('Ideia Central') }}
                        {{ Form::textarea('idea_central', null,
                            array('required',
                                  'class'=>'textarea',
                                  'placeholder'=>'Resuma sua Ideia')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('Problema') }}
                        {{ Form::textarea('problem', null,
                            array('required',
                                  'class'=>'textarea',
                                  'placeholder'=>'Descreva o Problema')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('Exposição da Ideia') }}
                        {{ Form::textarea('idea_exposition', null,
                            array('required',
                                  'class'=>'textarea',
                                  'placeholder'=>'Descreva sua Ideia')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('Data Limite') }}
                        {{ Form::date('limit_date', $proposal->limit_date) }}
                    </div>

                    <div class="form-group">
                        {{ Form::submit('Gravar',
                          array('class'=>'btn btn-primary botao')) }}
                    </div>

                    {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>

@stop