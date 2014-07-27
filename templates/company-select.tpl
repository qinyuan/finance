<select id="company">
  <option value="0">(不选择)</option>
{foreach from=$companies item=company}
  <option value="{$company.id}">{$company.name}</option>
{/foreach}
</select>