<form role="search" method="get" action="<?php echo esc_url( home_url('/') ); ?>" style="display:flex; gap:8px; max-width:400px;">
    
    <input type="hidden" name="post_type" value="sherbimet">

    <input 
        type="search" 
        name="s"
        placeholder="Kërko shërbimin..."
        value="<?php echo esc_attr( get_search_query() ); ?>"
        style="flex:1; padding:10px 15px; border:1px solid #ddd; border-radius:5px;"
    >

    <button type="submit" style="padding:10px 20px; background:var(--gold); color:#fff; border:none; border-radius:5px;">
        🔍
    </button>
</form>
