<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>" style="display: flex; gap: 8px; max-width: 400px;">
    <input 
        type="search" 
        class="search-field" 
        placeholder="Kërko shërbimin..." 
        value="<?php echo get_search_query(); ?>" 
        name="s"
        style="flex: 1; padding: 10px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 0.95rem; transition: border-color 0.3s;"
    />
    <button 
        type="submit" 
        class="search-submit"
        style="padding: 10px 20px; background: var(--gold); color: white; border: none; border-radius: 5px; font-weight: 600; cursor: pointer; transition: background 0.3s;"
    >
        <span style="display: inline;">🔍</span>
    </button>
</form>
<style>
.search-form input:focus {
    outline: none;
    border-color: var(--gold);
    box-shadow: 0 0 0 3px rgba(197, 160, 89, 0.1);
}
.search-submit:hover {
    background: #a8845f;
}
</style>