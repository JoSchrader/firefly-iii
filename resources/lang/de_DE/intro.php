<?php
declare(strict_types=1);

/**
 * intro.php
 * Copyright (c) 2017 thegrumpydictator@gmail.com
 * This software may be modified and distributed under the terms of the Creative Commons Attribution-ShareAlike 4.0 International License.
 *
 * See the LICENSE file for details.
 */

return [
    // index
    'index_intro'                           => 'Wilkommen auf der Startseite von Firefly III. Bitte nehmen Sie sich die Zeit, um ein Gefühl dafür zu bekommen, wie Firefly III funktioniert.',
    'index_accounts-chart'                  => 'Dieses Diagramm zeigt den aktuellen Saldo Ihrer Anlagenkonten. Sie können die anzuzeigenden Konten in Ihren Einstellungen auswählen.',
    'index_box_out_holder'                  => 'Diese kleine und deren benachbarten Boxen geben Ihnen einen schnellen Überblick über Ihre finanzielle Situation.',
    'index_help'                            => 'Wenn Sie jemals Hilfe bei einer Seite oder einem Formular benötigen, drücken Sie diese Taste.',
    'index_outro'                           => 'Die meisten Seiten von Firefly III werden mit einer kleinen Tour wie dieser beginnen. Bitte kontaktieren Sie mich, wenn Sie Fragen oder Kommentare haben. Viel Spaß!',
    'index_sidebar-toggle'                  => 'Um neue Transaktionen, Konten oder andere Dinge zu erstellen, verwenden Sie das Menü unter diesem Symbol.',

    // create account:
    'accounts_create_iban'                  => 'Geben Sie Ihren Konten eine gültige IBAN. Dies könnte einen Datenimport in Zukunft sehr einfach machen.',
    'accounts_create_asset_opening_balance' => 'Anlagekonten können ein "Eröffnungsguthaben" haben, welches den Beginn der Historie dieses Kontos in Firefly angibt.',
    'accounts_create_asset_currency'        => 'Firefly III unterstützt mehrere Währungen. Anlagenkonten haben eine Hauptwährung, die Sie hier einstellen müssen.',
    'accounts_create_asset_virtual'         => 'Es kann manchmal helfen, Ihrem Konto ein virtuelles Gleichgewicht zu geben: eine zusätzliche Menge, die dem tatsächlichen Kontostand immer hinzugefügt oder daraus entfernt wird.',

    // budgets index
    'budgets_index_intro'                   => 'Mit Budgets verwalten Sie Ihre Finanzen und bilden damit eine der Kernfunktionen von Firefly III.',
    'budgets_index_set_budget'              => 'Stellen Sie Ihr Gesamtbudget für jeden Zeitraum ein, damit Firefly Ihnen mitteilen kann, ob Sie das verfügbare Geld budgetiert haben.',
    'budgets_index_see_expenses_bar'        => 'Dieser Balken wird sich langsam füllen, wenn Sie Geld ausgeben.',
    'budgets_index_navigate_periods'        => 'Navigieren Sie durch Zeiträume, um die Budgets im Voraus zu setzen.',
    'budgets_index_new_budget'              => 'Erstellen Sie neue Budgets, wie Sie es für richtig halten.',
    'budgets_index_list_of_budgets'         => 'Verwenden Sie diese Tabelle, um die Beträge für jedes Budget festzulegen und einen Überblick zu erhalten.',
    'budgets_index_outro'                   => 'Um mehr über die Budgetierung zu erfahren, klicken Sie auf das Hilfesymbol in der oberen rechten Ecke.',

    // reports (index)
    'reports_index_intro'                   => 'Verwenden Sie diese Reports, um detaillierte Einblicke in Ihre Finanzen zu erhalten.',
    'reports_index_inputReportType'         => 'Wählen Sie einen Berichtstyp aus. Sehen Sie sich die Hilfeseiten an, um zu sehen, was jeder Bericht Ihnen zeigt.',
    'reports_index_inputAccountsSelect'     => 'Sie können Anlagekonten ausschließen oder einbeziehen, wie Sie es für richtig halten.',
    'reports_index_inputDateRange'          => 'Der gewählte Datumsbereich liegt ganz bei Ihnen: von einem Tag bis 10 Jahre.',
    'reports_index_extra-options-box'       => 'Abhängig von dem ausgewählten Bericht können Sie hier zusätzliche Filter und Optionen auswählen. Sehen Sie sich dieses Feld an, wenn Sie Berichtstypen ändern.',

    // reports (reports)
    'reports_report_default_intro'          => 'Dieser Bericht gibt Ihnen einen schnellen und umfassenden Überblick über Ihre Finanzen. Wenn Sie etwas anderes sehen möchten, kontaktieren Sie mich bitte nicht!',
    'reports_report_audit_intro'            => 'In diesem Bericht erhalten Sie detaillierte Einblicke in Ihre Bestandskonten.',
    'reports_report_audit_optionsBox'       => 'Verwenden Sie diese Kontrollkästchen, um die Spalten anzuzeigen oder auszublenden, an denen Sie interessiert sind.',

    'reports_report_category_intro'                  => 'Dieser Bericht gibt Ihnen Einblick in eine oder mehrere Kategorien.',
    'reports_report_category_pieCharts'              => 'Diese Diagramme geben Ihnen Einblick in Ausgaben und Einnahmen pro Kategorie oder pro Konto.',
    'reports_report_category_incomeAndExpensesChart' => 'Diese Tabelle zeigt Ihre Ausgaben und Einnahmen pro Kategorie.',

    'reports_report_tag_intro'                  => 'Dieser Bericht gibt Ihnen Einblick in eine oder mehrere Tags.',
    'reports_report_tag_pieCharts'              => 'Diese Diagramme geben Ihnen Einblick in Ausgaben und Einnahmen pro Tag, Konto, Kategorie oder budget.',
    'reports_report_tag_incomeAndExpensesChart' => 'Diese Tabelle zeigt Ihre Ausgaben und Einnahmen pro Tag.',

    'reports_report_budget_intro'                             => 'Dieser Bericht gibt Ihnen Einblick in eine oder mehrere Budgets.',
    'reports_report_budget_pieCharts'                         => 'These charts will give you insight in expenses per budget or per account.',
    'reports_report_budget_incomeAndExpensesChart'            => 'This chart shows your expenses per budget.',

    // create transaction
    'transactions_create_switch_box'                          => 'Use these buttons to quickly switch the type of transaction you wish to save.',
    'transactions_create_ffInput_category'                    => 'You can freely type in this field. Previously created categories will be suggested.',
    'transactions_create_withdrawal_ffInput_budget'           => 'Link your withdrawal to a budget for better financial control.',
    'transactions_create_withdrawal_currency_dropdown_amount' => 'Use this dropdown when your withdrawal is in another currency.',
    'transactions_create_deposit_currency_dropdown_amount'    => 'Use this dropdown when your deposit is in another currency.',
    'transactions_create_transfer_ffInput_piggy_bank_id'      => 'Select a piggy bank and link this transfer to your savings.',

    // piggy banks index:
    'piggy-banks_index_saved'                                 => 'This field shows you how much you\'ve saved in each piggy bank.',
    'piggy-banks_index_button'                                => 'Next to this progress bar are two buttons (+ and -) to add or remove money from each piggy bank.',
    'piggy-banks_index_accountStatus'                         => 'For each asset account with at least one piggy bank the status is listed in this table.',

    // create piggy
    'piggy-banks_create_name'                                 => 'What is your goal? A new couch, a camera, money for emergencies?',
    'piggy-banks_create_date'                                 => 'You can set a target date or a deadline for your piggy bank.',

    // show piggy
    'piggy-banks_show_piggyChart'                             => 'This chart will show the history of this piggy bank.',
    'piggy-banks_show_piggyDetails'                           => 'Some details about your piggy bank',
    'piggy-banks_show_piggyEvents'                            => 'Any additions or removals are also listed here.',

    // bill index
    'bills_index_paid_in_period'                              => 'This field indicates when the bill was last paid.',
    'bills_index_expected_in_period'                          => 'This field indicates for each bill if and when the next bill is expected to hit.',

    // show bill
    'bills_show_billInfo'                                     => 'This table shows some general information about this bill.',
    'bills_show_billButtons'                                  => 'Use this button to re-scan old transactions so they will be matched to this bill.',
    'bills_show_billChart'                                    => 'This chart shows the transactions linked to this bill.',

    // create bill
    'bills_create_name'                                       => 'Use a descriptive name such as "Rent" or "Health insurance".',
    'bills_create_match'                                      => 'To match transactions, use terms from those transactions or the expense account involved. All words must match.',
    'bills_create_amount_min_holder'                          => 'Select a minimum and maximum amount for this bill.',
    'bills_create_repeat_freq_holder'                         => 'Most bills repeat monthly, but you can set another frequency here.',
    'bills_create_skip_holder'                                => 'If a bill repeats every 2 weeks for example, the "skip"-field should be set to "1" to skip every other week.',

    // rules index
    'rules_index_intro'                                       => 'Firefly III allows you to manage rules, that will automagically be applied to any transaction you create or edit.',
    'rules_index_new_rule_group'                              => 'You can combine rules in groups for easier management.',
    'rules_index_new_rule'                                    => 'Create as many rules as you like.',
    'rules_index_prio_buttons'                                => 'Order them any way you see fit.',
    'rules_index_test_buttons'                                => 'You can test your rules or apply them to existing transactions.',
    'rules_index_rule-triggers'                               => 'Rules have "triggers" and "actions" that you can order by drag-and-drop.',
    'rules_index_outro'                                       => 'Be sure to check out the help pages using the (?) icon in the top right!',

    // create rule:
    'rules_create_mandatory'                                  => 'Choose a descriptive title, and set when the rule should be fired.',
    'rules_create_ruletriggerholder'                          => 'Add as many triggers as you like, but remember that ALL triggers must match before any actions are fired.',
    'rules_create_test_rule_triggers'                         => 'Use this button to see which transactions would match your rule.',
    'rules_create_actions'                                    => 'Set as many actions as you like.',

    // preferences
    'preferences_index_tabs'                                  => 'More options are available behind these tabs.',

    // currencies
    'currencies_index_intro'                                  => 'Firefly III supports multiple currencies, which you can change on this page.',
    'currencies_index_default'                                => 'Firefly III has one default currency. You can always switch of course using these buttons.',

    // create currency
    'currencies_create_code'                                  => 'This code should be ISO compliant (Google it for your new currency).',
];
