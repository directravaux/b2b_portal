var KTFormWidgets = function() {
    var e;
    return {
        init: function() {
            !function() {
                $("#kt_datepicker").datepicker({
                    todayHighlight: !0,
                    templates: {
                        leftArrow: '<i class="la la-angle-left"></i>',
                        rightArrow: '<i class="la la-angle-right"></i>'
                    }
                }), $("#kt_datetimepicker").datetimepicker({
                    pickerPosition: "bottom-left",
                    todayHighlight: !0,
                    autoclose: !0,
                    format: "yyyy.mm.dd hh:ii"
                }), $("#kt_datetimepicker").change(function() {
                    e.element($(this))
                }), $("#kt_timepicker").timepicker({
                    minuteStep: 1,
                    showSeconds: !0,
                    showMeridian: !0
                }), $("#kt_daterangepicker").daterangepicker({
                    buttonClasses: " btn",
                    applyClass: "btn-primary",
                    cancelClass: "btn-secondary"
                }, function(t, i, a) {
                    var r = $("#kt_daterangepicker").find(".form-control");
                    r.val(t.format("YYYY/MM/DD") + " / " + i.format("YYYY/MM/DD")), e.element(r)
                }), $("[data-switch=true]").bootstrapSwitch(), $("[data-switch=true]").on("switchChange.bootstrapSwitch", function() {
                    e.element($(this))
                }), $("#kt_bootstrap_select").selectpicker(), $("#kt_bootstrap_select").on("changed.bs.select", function() {
                    e.element($(this))
                }), $("#kt_select2").select2({
                    placeholder: "Select a state"
                }), $("#kt_select2").on("select2:change", function() {
                    e.element($(this))
                });
                var t = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.whitespace,
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    prefetch: "https://keenthemes.com/metronic/tools/preview/api/typeahead/countries.json"
                });
                $("#kt_typeahead").typeahead(null, {
                    name: "countries",
                    source: t
                }), $("#kt_typeahead").bind("typeahead:select", function(t, i) {
                    e.element($("#kt_typeahead"))
                })
            }(), e = $("#kt_form_1").validate({
                rules: {
                    date: {
                        required: !0,
                        date: !0
                    },
                    daterange: {
                        required: !0
                    },
                    datetime: {
                        required: !0
                    },
                    time: {
                        required: !0
                    },
                    select: {
                        required: !0,
                        minlength: 2,
                        maxlength: 4
                    },
                    select2: {
                        required: !0
                    },
                    typeahead: {
                        required: !0
                    },
                    switch: {
                        required: !0
                    },
                    markdown: {
                        required: !0
                    }
                },
                invalidHandler: function(e, t) {
                    $("#kt_form_1_msg").removeClass("kt--hide").show(), KTUtil.scrollTo("kt_form_1_msg", -200)
                },
                submitHandler: function(e) {}
            })
        }
    }
}();
jQuery(document).ready(function() {
    KTFormWidgets.init()
});

