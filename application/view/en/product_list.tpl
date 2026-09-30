<div id="products">

{foreach from=$list item=productList}
    <table class="space-products">
        <tr>
            <td valign="top"><a href="#"><img src="showimg.php?i={$productList.imageId}" onclick="openNewWindow('showimg.php?i={$productList.imageId}&amp;t=2', '400', '450');" height="100" alt="product1" /></a></td>
            <td class="message">
                <table>
                    <tr>
                        <td><h4><a href="index.php?page=product&cmd=view&i={$productList.productId}&la={$lang}">{$productList.product}</a></h4></td>
                    </tr>
                    <tr>
                        <td>&nbsp;  </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <div class="clearer"></div>
{/foreach}
</div>