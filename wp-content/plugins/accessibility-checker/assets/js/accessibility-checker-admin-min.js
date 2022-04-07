!function(e){"use strict";e(function(){e("input[type=checkbox][name=edac_add_footer_accessibility_statement]").on("change",function(){this.checked?e("input[type=checkbox][name=edac_include_accessibility_statement_link]").prop("disabled",!1):(e("input[type=checkbox][name=edac_include_accessibility_statement_link]").prop("disabled",!0),e("input[type=checkbox][name=edac_include_accessibility_statement_link]").prop("checked",!1))}),"none"==e("input[type=radio][name=edac_simplified_summary_position]:checked").val()&&e("#ac-simplified-summary-option-code").show(),e("input[type=radio][name=edac_simplified_summary_position]").on("load",function(){"none"==this.value?e("#ac-simplified-summary-option-code").show():e("#ac-simplified-summary-option-code").hide()})}),e(window).on("load",function(){function a(){let a=edac_script_vars.postID;null!=a&&e.ajax({url:ajaxurl,method:"GET",data:{action:"edac_summary_ajax",post_id:a,nonce:edac_script_vars.nonce}}).done(function(a){if(!0===a.success){let t=e.parseJSON(a.data);e(".edac-summary").html(t)}else console.log(a)})}function t(){let a=edac_script_vars.postID;null!=a&&e.ajax({url:ajaxurl,method:"GET",data:{action:"edac_details_ajax",post_id:a,nonce:edac_script_vars.nonce}}).done(function(a){if(!0===a.success){let t=e.parseJSON(a.data);e(".edac-details").html(t),e(".edac-details-rule-title").click(function(a){e(this).hasClass("active")?(e(this).next().slideUp(),e(this).removeClass("active")):(e(this).next().slideDown(),e(this).addClass("active"))}),e(".edac-details-rule-title-arrow").click(function(e){e.preventDefault()}),e(".edac-details-rule-records-record-actions-ignore").click(function(a){a.preventDefault(),e(this).parent().next(".edac-details-rule-records-record-ignore").slideToggle()}),s()}else console.log(a)})}function c(){let t=edac_script_vars.postID;null!=t&&e.ajax({url:ajaxurl,method:"GET",data:{action:"edac_readability_ajax",post_id:t,nonce:edac_script_vars.nonce}}).done(function(i){if(!0===i.success){let o=e.parseJSON(i.data);e(".edac-readability").html(o),e(".edac-readability-simplified-summary").submit(function(i){i.preventDefault();let o=e("#edac-readability-text").val();e.ajax({url:ajaxurl,method:"GET",data:{action:"edac_update_simplified_summary",post_id:t,summary:o,nonce:edac_script_vars.nonce}}).done(function(t){if(!0===t.success){e.parseJSON(t.data);c(),a()}else console.log(t)})})}else console.log(i)})}if(e(".edac-tab").click(function(a){a.preventDefault();var t=e("a",this).attr("href");e(".edac-panel").hide(),e(".edac-panel").removeClass("active"),e(".edac-tab a").removeClass("active").attr("aria-current",!1),e(t).show(),e(t).addClass("active"),e("a",this).addClass("active").attr("aria-current",!0)}),e(".edac-tab-summary").click(function(e){a()}),document.body.classList.contains("block-editor-page")){var i=wp.data.select("core/edit-post"),o=!1;wp.data.subscribe(function(){var s=i.isSavingMetaBoxes();s&&e(".edac-panel").addClass("edac-panel-loading"),s===o||s||(o=s,a(),t(),c(),e(".edac-panel").removeClass("edac-panel-loading")),o=s})}function s(){e(".edac-details-rule-records-record-ignore-submit").click(function(a){a.preventDefault();let t=[e(this).attr("data-id")],c=e(this).attr("data-action"),i=e(this).attr("data-type"),o=e(".edac-details-rule-records-record-ignore-comment",e(this).parent()).val();e.ajax({url:ajaxurl,method:"GET",data:{action:"edac_insert_ignore_data",ids:t,comment:o,ignore_action:c,ignore_type:i,nonce:edac_script_vars.nonce}}).done(function(a){if(!0===a.success){let i=e.parseJSON(a.data),o="#edac-details-rule-records-record-"+i.ids[0],s="enable"==i.action?"disable":"enable",n="enable"==i.action,r="enable"==i.action?"Ignored":"Ignore",d="enable"==i.action?"Stop Ignoring":"Ignore This "+i.type,l=i.user?"<strong>Username:</strong> "+i.user:"",u=i.date?"<strong>Date:</strong> "+i.date:"";e(o+" .edac-details-rule-records-record-ignore-submit").attr("data-action",s),e(o+" .edac-details-rule-records-record-ignore-comment").attr("disabled",n),"enable"!=i.action&&e(o+" .edac-details-rule-records-record-ignore-comment").val(""),e(o+" .edac-details-rule-records-record-actions-ignore").toggleClass("active"),e(".edac-details-rule-records-record-actions-ignore[data-id='"+t[0]+"']").toggleClass("active"),e(o+" .edac-details-rule-records-record-actions-ignore-label").html(r),e(".edac-details-rule-records-record-actions-ignore[data-id='"+t[0]+"'] .edac-details-rule-records-record-actions-ignore-label").html(r),e(o+" .edac-details-rule-records-record-ignore-submit-label").html(d),e(o+" .edac-details-rule-records-record-ignore-info-user").html(l),e(o+" .edac-details-rule-records-record-ignore-info-date").html(u);let p=e(o).parents(".edac-details-rule"),m=parseInt(e(".edac-details-rule-count",p).html());"enable"==i.action?m--:"disable"==i.action&&m++,0==m?e(".edac-details-rule-count",p).removeClass("active"):e(".edac-details-rule-count",p).addClass("active"),m.toString(),e(".edac-details-rule-count",p).html(m);var c=parseInt(e(".edac-details-rule-count-ignore",p).html());"enable"==i.action?c++:"disable"==i.action&&c--,0==c?e(".edac-details-rule-count-ignore",p).hide():e(".edac-details-rule-count-ignore",p).show(),c.toString(),e(".edac-details-rule-count-ignore",p).html(c),(e("body").hasClass("accessibility-checker_page_accessibility_checker_issues")||e("body").hasClass("accessibility-checker_page_accessibility_checker_ignored"))&&location.reload(!0)}else console.log(a)})})}function n(a,t){e.ajax({url:ajaxurl,method:"GET",data:{action:"edac_review_notice_ajax",review_action:a,nonce:edac_script_vars.nonce}}).done(function(a){if(!0===a.success){e.parseJSON(a.data);e(".edac-review-notice").fadeOut(),t&&(window.location.href="https://wordpress.org/support/plugin/accessibility-checker/reviews/#new-post")}else console.log(a)})}e(".edac-review-notice").length&&(e(".edac-review-notice-review").on("click",function(){n("stop",!0)}),e(".edac-review-notice-remind").on("click",function(){n("pause",!1)}),e(".edac-review-notice-dismiss").on("click",function(){n("stop",!1)})),a(),t(),c(),s()})}(jQuery);