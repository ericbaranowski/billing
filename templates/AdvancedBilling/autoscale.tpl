<ul id="ASOptions">
    {foreach from=$group->getOptions() item=option}
        <li data-id="{$option->id}">
            <div>
                <i class="icon-move"></i>
            </div>
            <div>
                {$option->name}
            </div>
            <div class="ASOptionSettingsButtons">
                <button type="button" name="top-rules" class="btn btn-primary btn-small top"><i class="icon-arrow-up"></i> <span>{$LANG->translate('Manage Top Rules'); ?></span></button>
                <button type="button" name="bottom-rules" class="btn btn-primary btn-small bottom"><span>{$LANG->translate('Manage Bottom Rules'); ?></span><i class="icon-arrow-down"></i></button>
            </div>
            <div class="ASOptionManageButtons">
                <button type="button" name="JSONManageAction" value="disable" class="btn btn-danger btn-small" {if !$option->enabled}>style="display: none;"{/if}><i class="icon-pause"></i> <span>{$LANG->translate('Disable Option')}</span></button>
            </div>
        </li>
    {/foreach}
</ul>