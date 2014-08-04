<select id="user">
  <option value="0">(全部)</option>
{foreach from=$users item=user}
  <option value="{$user.id}" {if $user.id==$filterUserId} selected="selected"{/if}>{$user.name}</option>
{/foreach}
</select>