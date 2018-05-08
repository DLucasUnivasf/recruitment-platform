@foreach($profiles as $profile)
<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
    <div class="mdl-card mdl-shadow--4dp mdl-card-wide">
        <div class="mdl-card__title column pb-5">
            <h2 class="mdl-card__title-text self-center dont-break-out">{{ $profile->name }}</h2>
            <div class="mdl-card__subtitle-text">
                @if($profile->internship)
                    <span class="mdl-chip chip-estagio">
                        <span class="mdl-chip__text">Estágio</span>
                    </span>
                @else
                    <span class="mdl-chip chip-contrato">
                        <span class="mdl-chip__text">Contrato</span>
                    </span>
                @endif
            </div>
            <div class="mt-5">
                <select class="rating" data-current-rating="{{ $profile->star }}" data-profile-id="{{ encrypt($profile->_id) }}">
                    {{-- <option value=""></option> --}}
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>
        <!-- <hr class="mg-0 pd-0"> -->
        <div class="mdl-card__supporting-text">
            <ul class="mdl-list pd-tb-0 mg-tb-0">
                <li class="mdl-list__item pd-tb-8">
                    <span class="mdl-list__item-primary-content">
                        <i class="mdl-list__item-icon fa fa-phone icon-responsive" aria-hidden="true"></i>
                        <a href="tel:+55#">{{ $profile->phone }}</a>
                    </span>
                </li>
                <li class="mdl-list__item pd-tb-8">
                    <span class="mdl-list__item-primary-content">
                        <i class="mdl-list__item-icon fa fa-envelope icon-responsive" aria-hidden="true"></i>
                        <a class="dont-break-out" href="mailto:{{ $profile->email }}">{{ $profile->email }}</a>
                    </span>
                </li>
            </ul>
        </div>
        <div class="mdl-card__menu pos-t-33">
            @if($profile->archived)
            <!-- Colored mini FAB button -->
                <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab ev-restore flex center bg-light-blue icon-color" data-profile-id="{{ encrypt($profile->_id) }}">
                    <i class="fa fa-undo icon-responsive" aria-hidden="true"></i>                    
            @else
                <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab ev-archive flex center bg-grey icon-color" data-profile-id="{{ encrypt($profile->_id) }}">
                    <i class="fa fa-archive icon-responsive" aria-hidden="true"></i>
            @endif
                </button>
        </div>
        <!-- <hr class="mg-0 pd-0"> -->
        <div class="mdl-card__actions flex space-between">
            <!-- Colored icon button -->
            <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                <a href="{{ action('CurriculumController@show', encrypt($profile->curriculum_id)) }}" target="_blank">
                    <i class="mdl-textfield__icon fa fa-paperclip icon-color icon-responsive" aria-hidden="true"></i>
                </a>
            </button>
            @if($profile->github)
                <button class="mdl-button mdl-js-button mdl-button--icon">
                    <a href="https://github.com/Gabrielr2508" target="_blank">
                        <i class="mdl-textfield__icon fa fa-github icon-color icon-responsive"></i>
                    </a>
                </button>
            @endif
            @if($profile->linkedin)
                <button class="mdl-button mdl-js-button mdl-button--icon">
                    <a href="https://linkedin.com/in/GabrielRGomes" target="_blank">
                        <i class="mdl-textfield__icon fa fa-linkedin-square icon-color icon-responsive"></i>
                    </a>
                </button>
            @endif
            <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored ev-open-dialog" data-profile-id="{{ encrypt($profile->_id) }}">
                <i class="mdl-textfield__icon fa fa-tags icon-color icon-responsive" aria-hidden="true"></i>
            </button>
        </div>
    </div>
</div>
@endforeach