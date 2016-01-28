
(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href=".html">Syscover</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:Syscover_Crm" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Syscover/Crm.html">Crm</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:Syscover_Crm_Controllers" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Syscover/Crm/Controllers.html">Controllers</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Syscover_Crm_Controllers_CustomerController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Syscover/Crm/Controllers/CustomerController.html">CustomerController</a>                    </div>                </li>                            <li data-name="class:Syscover_Crm_Controllers_GroupController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Syscover/Crm/Controllers/GroupController.html">GroupController</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Syscover_Crm_Models" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Syscover/Crm/Models.html">Models</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Syscover_Crm_Models_Customer" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Syscover/Crm/Models/Customer.html">Customer</a>                    </div>                </li>                            <li data-name="class:Syscover_Crm_Models_Group" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Syscover/Crm/Models/Group.html">Group</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:Syscover_Crm_CrmServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Syscover/Crm/CrmServiceProvider.html">CrmServiceProvider</a>                    </div>                </li>                </ul></div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    
            {"type": "Namespace", "link": "Syscover.html", "name": "Syscover", "doc": "Namespace Syscover"},{"type": "Namespace", "link": "Syscover/Crm.html", "name": "Syscover\\Crm", "doc": "Namespace Syscover\\Crm"},{"type": "Namespace", "link": "Syscover/Crm/Controllers.html", "name": "Syscover\\Crm\\Controllers", "doc": "Namespace Syscover\\Crm\\Controllers"},{"type": "Namespace", "link": "Syscover/Crm/Models.html", "name": "Syscover\\Crm\\Models", "doc": "Namespace Syscover\\Crm\\Models"},
            
            {"type": "Class", "fromName": "Syscover\\Crm\\Controllers", "fromLink": "Syscover/Crm/Controllers.html", "link": "Syscover/Crm/Controllers/CustomerController.html", "name": "Syscover\\Crm\\Controllers\\CustomerController", "doc": "&quot;Class CustomerController&quot;"},
                                                        {"type": "Method", "fromName": "Syscover\\Crm\\Controllers\\CustomerController", "fromLink": "Syscover/Crm/Controllers/CustomerController.html", "link": "Syscover/Crm/Controllers/CustomerController.html#method_indexCustom", "name": "Syscover\\Crm\\Controllers\\CustomerController::indexCustom", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Syscover\\Crm\\Controllers\\CustomerController", "fromLink": "Syscover/Crm/Controllers/CustomerController.html", "link": "Syscover/Crm/Controllers/CustomerController.html#method_customActionUrlParameters", "name": "Syscover\\Crm\\Controllers\\CustomerController::customActionUrlParameters", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Syscover\\Crm\\Controllers\\CustomerController", "fromLink": "Syscover/Crm/Controllers/CustomerController.html", "link": "Syscover/Crm/Controllers/CustomerController.html#method_createCustomRecord", "name": "Syscover\\Crm\\Controllers\\CustomerController::createCustomRecord", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Syscover\\Crm\\Controllers\\CustomerController", "fromLink": "Syscover/Crm/Controllers/CustomerController.html", "link": "Syscover/Crm/Controllers/CustomerController.html#method_storeCustomRecord", "name": "Syscover\\Crm\\Controllers\\CustomerController::storeCustomRecord", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Syscover\\Crm\\Controllers\\CustomerController", "fromLink": "Syscover/Crm/Controllers/CustomerController.html", "link": "Syscover/Crm/Controllers/CustomerController.html#method_editCustomRecord", "name": "Syscover\\Crm\\Controllers\\CustomerController::editCustomRecord", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Syscover\\Crm\\Controllers\\CustomerController", "fromLink": "Syscover/Crm/Controllers/CustomerController.html", "link": "Syscover/Crm/Controllers/CustomerController.html#method_updateCustomRecord", "name": "Syscover\\Crm\\Controllers\\CustomerController::updateCustomRecord", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Syscover\\Crm\\Controllers", "fromLink": "Syscover/Crm/Controllers.html", "link": "Syscover/Crm/Controllers/GroupController.html", "name": "Syscover\\Crm\\Controllers\\GroupController", "doc": "&quot;Class GroupController&quot;"},
                                                        {"type": "Method", "fromName": "Syscover\\Crm\\Controllers\\GroupController", "fromLink": "Syscover/Crm/Controllers/GroupController.html", "link": "Syscover/Crm/Controllers/GroupController.html#method_storeCustomRecord", "name": "Syscover\\Crm\\Controllers\\GroupController::storeCustomRecord", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Syscover\\Crm\\Controllers\\GroupController", "fromLink": "Syscover/Crm/Controllers/GroupController.html", "link": "Syscover/Crm/Controllers/GroupController.html#method_updateCustomRecord", "name": "Syscover\\Crm\\Controllers\\GroupController::updateCustomRecord", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Syscover\\Crm", "fromLink": "Syscover/Crm.html", "link": "Syscover/Crm/CrmServiceProvider.html", "name": "Syscover\\Crm\\CrmServiceProvider", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Syscover\\Crm\\CrmServiceProvider", "fromLink": "Syscover/Crm/CrmServiceProvider.html", "link": "Syscover/Crm/CrmServiceProvider.html#method_boot", "name": "Syscover\\Crm\\CrmServiceProvider::boot", "doc": "&quot;Bootstrap the application services.&quot;"},
                    {"type": "Method", "fromName": "Syscover\\Crm\\CrmServiceProvider", "fromLink": "Syscover/Crm/CrmServiceProvider.html", "link": "Syscover/Crm/CrmServiceProvider.html#method_register", "name": "Syscover\\Crm\\CrmServiceProvider::register", "doc": "&quot;Register the application services.&quot;"},
            
            {"type": "Class", "fromName": "Syscover\\Crm\\Models", "fromLink": "Syscover/Crm/Models.html", "link": "Syscover/Crm/Models/Customer.html", "name": "Syscover\\Crm\\Models\\Customer", "doc": "&quot;Class Group&quot;"},
                                                        {"type": "Method", "fromName": "Syscover\\Crm\\Models\\Customer", "fromLink": "Syscover/Crm/Models/Customer.html", "link": "Syscover/Crm/Models/Customer.html#method_validate", "name": "Syscover\\Crm\\Models\\Customer::validate", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Syscover\\Crm\\Models\\Customer", "fromLink": "Syscover/Crm/Models/Customer.html", "link": "Syscover/Crm/Models/Customer.html#method_scopeBuilder", "name": "Syscover\\Crm\\Models\\Customer::scopeBuilder", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Syscover\\Crm\\Models\\Customer", "fromLink": "Syscover/Crm/Models/Customer.html", "link": "Syscover/Crm/Models/Customer.html#method_getLang", "name": "Syscover\\Crm\\Models\\Customer::getLang", "doc": "&quot;Get Lang from user&quot;"},
                    {"type": "Method", "fromName": "Syscover\\Crm\\Models\\Customer", "fromLink": "Syscover/Crm/Models/Customer.html", "link": "Syscover/Crm/Models/Customer.html#method_getGroup", "name": "Syscover\\Crm\\Models\\Customer::getGroup", "doc": "&quot;Get group from user&quot;"},
                    {"type": "Method", "fromName": "Syscover\\Crm\\Models\\Customer", "fromLink": "Syscover/Crm/Models/Customer.html", "link": "Syscover/Crm/Models/Customer.html#method_getAuthIdentifier", "name": "Syscover\\Crm\\Models\\Customer::getAuthIdentifier", "doc": "&quot;Get the unique identifier for the user.&quot;"},
                    {"type": "Method", "fromName": "Syscover\\Crm\\Models\\Customer", "fromLink": "Syscover/Crm/Models/Customer.html", "link": "Syscover/Crm/Models/Customer.html#method_getAuthPassword", "name": "Syscover\\Crm\\Models\\Customer::getAuthPassword", "doc": "&quot;Get the password for the user.&quot;"},
                    {"type": "Method", "fromName": "Syscover\\Crm\\Models\\Customer", "fromLink": "Syscover/Crm/Models/Customer.html", "link": "Syscover/Crm/Models/Customer.html#method_getRememberToken", "name": "Syscover\\Crm\\Models\\Customer::getRememberToken", "doc": "&quot;Get the token value for the \&quot;remember me\&quot; session.&quot;"},
                    {"type": "Method", "fromName": "Syscover\\Crm\\Models\\Customer", "fromLink": "Syscover/Crm/Models/Customer.html", "link": "Syscover/Crm/Models/Customer.html#method_setRememberToken", "name": "Syscover\\Crm\\Models\\Customer::setRememberToken", "doc": "&quot;Set the token value for the \&quot;remember me\&quot; session.&quot;"},
                    {"type": "Method", "fromName": "Syscover\\Crm\\Models\\Customer", "fromLink": "Syscover/Crm/Models/Customer.html", "link": "Syscover/Crm/Models/Customer.html#method_getRememberTokenName", "name": "Syscover\\Crm\\Models\\Customer::getRememberTokenName", "doc": "&quot;Get the column name for the \&quot;remember me\&quot; token.&quot;"},
                    {"type": "Method", "fromName": "Syscover\\Crm\\Models\\Customer", "fromLink": "Syscover/Crm/Models/Customer.html", "link": "Syscover/Crm/Models/Customer.html#method_getEmailForPasswordReset", "name": "Syscover\\Crm\\Models\\Customer::getEmailForPasswordReset", "doc": "&quot;Get the e-mail address where password reset links are sent.&quot;"},
                    {"type": "Method", "fromName": "Syscover\\Crm\\Models\\Customer", "fromLink": "Syscover/Crm/Models/Customer.html", "link": "Syscover/Crm/Models/Customer.html#method_getAuthIdentifierName", "name": "Syscover\\Crm\\Models\\Customer::getAuthIdentifierName", "doc": "&quot;Get the name of the unique identifier for the user.&quot;"},
            
            {"type": "Class", "fromName": "Syscover\\Crm\\Models", "fromLink": "Syscover/Crm/Models.html", "link": "Syscover/Crm/Models/Group.html", "name": "Syscover\\Crm\\Models\\Group", "doc": "&quot;Class Group&quot;"},
                                                        {"type": "Method", "fromName": "Syscover\\Crm\\Models\\Group", "fromLink": "Syscover/Crm/Models/Group.html", "link": "Syscover/Crm/Models/Group.html#method_validate", "name": "Syscover\\Crm\\Models\\Group::validate", "doc": "&quot;\n&quot;"},
            
            
                                        // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0,-1));

        return tokens;
    };

    root.Sami = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function(term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function(term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function(matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function(ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function(type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function(ele) {
            ele.html(treeHtml);
        }
    };

    $(function() {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Sami.injectApiTree($('#api-tree'));
    });

    return root.Sami;
})(window);

$(function() {

    // Enable the version switcher
    $('#version-switcher').change(function() {
        window.location = $(this).val()
    });

    
        // Toggle left-nav divs on click
        $('#api-tree .hd span').click(function() {
            $(this).parent().parent().toggleClass('opened');
        });

        // Expand the parent namespaces of the current page.
        var expected = $('body').attr('data-name');

        if (expected) {
            // Open the currently selected node and its parents.
            var container = $('#api-tree');
            var node = $('#api-tree li[data-name="' + expected + '"]');
            // Node might not be found when simulating namespaces
            if (node.length > 0) {
                node.addClass('active').addClass('opened');
                node.parents('li').addClass('opened');
                var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
                // Position the item nearer to the top of the screen.
                scrollPos -= 200;
                container.scrollTop(scrollPos);
            }
        }

    
    
        var form = $('#search-form .typeahead');
        form.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'search',
            displayKey: 'name',
            source: function (q, cb) {
                cb(Sami.search(q));
            }
        });

        // The selection is direct-linked when the user selects a suggestion.
        form.on('typeahead:selected', function(e, suggestion) {
            window.location = suggestion.link;
        });

        // The form is submitted when the user hits enter.
        form.keypress(function (e) {
            if (e.which == 13) {
                $('#search-form').submit();
                return true;
            }
        });

    
});


