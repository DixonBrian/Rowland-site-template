<script type="text/javascript">
        function dosearch() {
                var sf = document.searchform;
                for (i = sf.sengines.length - 1; i > -1; i--) {
                        if (sf.sengines[i].checked) {
                                var submitto = sf.sengines[i].value + escape(sf.searchterms.value);
                        }
                }
                window.open(submitto);
                return false;
        }
</script>
 
<form name="searchform" aria-label="Site Search" method="get" id="searchform" target="_blank"  onSubmit="return dosearch();">
        <input type='text' aria-label="Search Term Input" id="searchfield" class="search-field" name="searchterms" >
 
    <fieldset id='search-radio-buttons' aria-label="search-buttons" aria-labelledby="searchfield" class='search-radio-buttons'>
         <legend style="display:none;">Select where to search:</legend>
         <label class="search-input" for="on-site">
            <input name="sengines" id='on-site' aria-label="Select Current Site Search" type="radio" value="/?s=" checked>
            <span for="on-site" class="search-input">On Site</span>
        </label>
                <br>
        <label class="search-input" for="psu">
            <input name="sengines" aria-label="Select PSU Search" id='psu' type="radio" value="https://www.psu.edu/search/gss?#gsc.tab=0&gsc.q=">
            <span>Penn State</span>
        </label>
                <br>
        <label class="search-input" for="people">
            <input name="sengines" id='people' aria-label="Select People Search" type="radio" value="https://www.psu.edu/search/gss?#gsc.tab=0&gsc.q=">
            <span>People</span>
        </label>
                <br>
        <label class="search-input" for="departments">
            <input name="sengines" id='departments' type="radio" aria-label="Select Departments Search" value="https://www.psu.edu/search/gss?#gsc.tab=0&gsc.q=">
            <span>Departments</span>
        </label>
    </fieldset>       
        <button type="submit" name="SearchSubmit" id="search-submit" aria-label="Search" ><i class="fa fa-search"></i><span>Search</span></button>

</form>