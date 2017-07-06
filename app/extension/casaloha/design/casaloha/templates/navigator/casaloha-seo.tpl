{def $offset = $view_parameters[$active_offset]
$offset_text = concat('/(',$active_offset,')/')
$passive_text = ''
$currentPage = $offset|div($item_limit)|sum(1)}
{if is_set($view_parameters[$passive_offset])}
    {set $passive_text = concat('/(',$passive_offset,')/',$view_parameters[$passive_offset])}
{/if}

<!-- include pagination -->
{if $item_count|gt($item_limit)}
    <div class="pagination">
        <div class="in-1">
            {* quand on est sur la première page, le premier item n'est pas un lien car il est actif : *}
            {if $offset|eq(0)}
                <p class="item prev inactive"><span></span></p>
            {else}{* quand on n'est pas sur la 1e page, alors cet élément redevient un lien : *}
                <a href="{if $currentPage|sub(1)|eq(1)}{$is_cute_pagename}{else}{concat($is_cute_pagename, '/page-', $currentPage|sub(1))}{/if}" class="item prev" {if addRelRobot(concat($page_uri,$offset|gt($item_limit)|choose($passive_text,concat($passive_text,$offset_text,sub($offset,$item_limit))),$page_uri_suffix)|ezurl(,'full'))}{/if}><span></span></a>
            {/if}
            <ul>
                {def $pageNb = ceil(div($item_count,$item_limit))
                $display = true()}
                {for 0 to $pageNb|sub(1) as $counter}
                    {if $counter|mul($item_limit)|eq($offset)}
                        <li class="item active"><span>{$counter|sum(1)}</span></li>
                    {elseif and( $pageNb|gt(20),
                    $counter|gt(0),
                    $counter|lt($pageNb|sub(1)),
                    or( $counter|mul($item_limit)|lt($offset|sub(1|mul($item_limit))),
                    $counter|mul($item_limit)|gt($offset|sum(1|mul($item_limit))) )
                    )}
                        {if $display}
                            <li class="item interval">...</li>
                            {set $display = false()}
                        {/if}
                    {else}
                        {set $display = true()}
                        <li  class="item"><a href="{if $counter|eq(0)}{$is_cute_pagename}{else}{concat($is_cute_pagename,'/page-',sum($counter,1))}{/if}" {if addRelRobot(concat($page_uri,$counter|gt(0)|choose($passive_text,concat($passive_text,$offset_text,mul($counter,$item_limit))),$page_uri_suffix)|ezurl(,'full'))}{/if}>{$counter|sum(1)}</a></li>
                    {/if}
                {/for}
            </ul>
            {* ce lien est actif sauf sur la dernière page *}
            {if $offset|ge(mul($pageNb|sub(1),$item_limit))}
                <p class="item next inactive"><span></span></p>
            {else}{* quand on est sur la dernière page, alors cet élément n'est plus un lien : *}
                <a href="{concat($is_cute_pagename, '/page-', $currentPage|sum(1))}" class="item next" {if addRelRobot(concat($page_uri,$counter|gt(0)|choose($passive_text,concat($passive_text,$offset_text,sum($offset,$item_limit))),$page_uri_suffix)|ezurl(,'full'))}{/if}><span></span></a>
            {/if}
        </div>
    </div>
{/if}