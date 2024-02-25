<?php

/**
 * This file is part of a software developed by Tomáš Chochola.
 *
 * Copyright © 2024+ Tomáš Chochola <chocholatom1997@gmail.com>
 *
 * For the full copyright and license information, please view the
 * LICENSE.md file that was distributed with this source code, available
 * at the root of this repository.
 *
 * GitHub Profile: https://github.com/tomchochola
 * Support & Sponsor: https://github.com/sponsors/tomchochola
 */

declare(strict_types=1);

namespace Tomchochola\PhpCsFixerConfig;

class Configs
{
    /**
     * @return array<string, array<string, mixed>|bool>
     */
    public static function recommended(): array
    {
        return [
            'array_push' => true,
            'backtick_to_shell_exec' => true,
            'ereg_to_preg' => true,
            'mb_str_functions' => true,
            'modernize_strpos' => true,
            'no_alias_functions' => [
                'sets' => [
                    '@all',
                ],
            ],
            'no_alias_language_construct_call' => true,
            'no_mixed_echo_print' => true,
            'pow_to_exponentiation' => true,
            'random_api_migration' => [
                'replacements' => [
                    'mt_rand' => 'random_int',
                    'rand' => 'random_int',
                    'getrandmax' => 'mt_getrandmax',
                    'srand' => 'mt_srand',
                ]],
            'set_type_to_cast' => true,
            'array_syntax' => true,
            'no_multiline_whitespace_around_double_arrow' => true,
            'no_whitespace_before_comma_in_array' => [
                'after_heredoc' => true,
            ],
            'normalize_index_brace' => true,
            'return_to_yield_from' => true,
            'trim_array_spaces' => true,
            'whitespace_after_comma_in_array' => [
                'ensure_single_space' => true,
            ],
            'yield_from_array_to_yields' => true,
            'attribute_empty_parentheses' => true,
            'braces_position' => true,
            'encoding' => true,
            'no_multiple_statements_per_line' => true,
            'no_trailing_comma_in_singleline' => true,
            'non_printable_character' => true,
            'numeric_literal_separator' => [
                'override_existing' => true,
            ],
            'octal_notation' => true,
            'psr_autoloading' => true,
            'single_line_empty_body' => true,
            'class_reference_name_casing' => true,
            'constant_case' => true,
            'integer_literal_case' => true,
            'lowercase_keywords' => true,
            'lowercase_static_reference' => true,
            'magic_constant_casing' => true,
            'magic_method_casing' => true,
            'native_function_casing' => true,
            'native_type_declaration_casing' => true,
            'cast_spaces' => true,
            'lowercase_cast' => true,
            'modernize_types_casting' => true,
            'no_short_bool_cast' => true,
            'no_unset_cast' => true,
            'short_scalar_cast' => true,
            'class_attributes_separation' => [
                'elements' => [
                    'const' => 'one',
                    'method' => 'one',
                    'property' => 'one',
                    'trait_import' => 'none',
                    'case' => 'one',
                ],
            ],
            'class_definition' => [
                'single_line' => true,
            ],
            'no_blank_lines_after_class_opening' => true,
            'no_null_property_initialization' => true,
            'no_php4_constructor' => true,
            'no_unneeded_final_method' => true,
            'ordered_class_elements' => [
                'case_sensitive' => true,
                'sort_algorithm' => 'alpha',
                'order' => [
                    'use_trait',
                    'case',
                    'constant_public',
                    'constant_protected',
                    'constant_private',
                    'property_public_readonly',
                    'property_public',
                    'property_protected_readonly',
                    'property_protected',
                    'property_private_readonly',
                    'property_private',
                    'property_public_static',
                    'property_protected_static',
                    'property_private_static',
                    'construct',
                    'destruct',
                    'magic',
                    'method_public',
                    'method_protected',
                    'method_private',
                    'method_public_static',
                    'method_protected_static',
                    'method_private_static',
                    'method_public_abstract',
                    'method_protected_abstract',
                    'method_private_abstract',
                    'method_public_abstract_static',
                    'method_protected_abstract_static',
                    'method_private_abstract_static',
                    'phpunit',
                ],
            ],
            'ordered_interfaces' => [
                'case_sensitive' => true,
            ],
            'ordered_traits' => [
                'case_sensitive' => true,
            ],
            'ordered_types' => [
                'case_sensitive' => true,
                'null_adjustment' => 'always_last',
            ],
            'phpdoc_readonly_class_comment_to_keyword' => true,
            'protected_to_private' => true,
            'self_accessor' => true,
            'self_static_accessor' => true,
            'single_class_element_per_statement' => true,
            'single_trait_insert_per_statement' => true,
            'visibility_required' => true,
            'date_time_immutable' => true,
            'comment_to_phpdoc' => true,
            'header_comment' => [
                'comment_type' => 'PHPDoc',
                'location' => 'after_open',
                'header' => <<<'EOF'
                    This file is part of a software developed by Tomáš Chochola.

                    Copyright © 2024+ Tomáš Chochola <chocholatom1997@gmail.com>

                    For the full copyright and license information, please view the
                    LICENSE.md file that was distributed with this source code, available
                    at the root of this repository.

                    GitHub Profile: https://github.com/tomchochola
                    Support & Sponsor: https://github.com/sponsors/tomchochola
                    EOF,
            ],
            'multiline_comment_opening_closing' => true,
            'no_empty_comment' => true,
            'no_trailing_whitespace_in_comment' => true,
            'single_line_comment_spacing' => true,
            'single_line_comment_style' => true,
            'native_constant_invocation' => true,
            'control_structure_braces' => true,
            'control_structure_continuation_position' => true,
            'elseif' => true,
            'empty_loop_body' => [
                'style' => 'braces',
            ],
            'empty_loop_condition' => true,
            'include' => true,
            'no_alternative_syntax' => true,
            'no_break_comment' => true,
            'no_superfluous_elseif' => true,
            'no_unneeded_braces' => [
                'namespaces' => true,
            ],
            'no_unneeded_control_parentheses' => [
                'statements' => [
                    'break',
                    'clone',
                    'continue',
                    'echo_print',
                    'negative_instanceof',
                    'others',
                    'return',
                    'switch_case',
                    'yield',
                    'yield_from',
                ],
            ],
            'no_useless_else' => true,
            'simplified_if_return' => true,
            'switch_case_semicolon_to_colon' => true,
            'switch_case_space' => true,
            'switch_continue_to_break' => true,
            'trailing_comma_in_multiline' => [
                'after_heredoc' => true,
                'elements' => [
                    'arguments',
                    'arrays',
                    'match',
                    'parameters',
                ],
            ],
            'yoda_style' => [
                'always_move_variable' => true,
                'equal' => false,
                'identical' => false,
                'less_and_greater' => false,
            ],
            'combine_nested_dirname' => true,
            'date_time_create_from_format_call' => true,
            'fopen_flag_order' => true,
            'fopen_flags' => [
                'b_mode' => false,
            ],
            'function_declaration' => [
                'closure_fn_spacing' => 'none',
            ],
            'implode_call' => true,
            'lambda_not_used_import' => true,
            'method_argument_space' => [
                'after_heredoc' => true,
            ],
            'native_function_invocation' => [
                'include' => [
                    '@all',
                ],
            ],
            'no_spaces_after_function_name' => true,
            'no_unreachable_default_argument_value' => true,
            'no_useless_sprintf' => true,
            'nullable_type_declaration_for_default_null_value' => true,
            'regular_callable_call' => true,
            'return_type_declaration' => true,
            'static_lambda' => true,
            'use_arrow_functions' => true,
            'void_return' => true,
            'fully_qualified_strict_types' => [
                'import_symbols' => true,
                'leading_backslash_in_global_namespace' => true,
            ],
            'global_namespace_import' => [
                'import_classes' => false,
                'import_constants' => false,
                'import_functions' => false,
            ],
            'no_leading_import_slash' => true,
            'no_unneeded_import_alias' => true,
            'no_unused_imports' => true,
            'ordered_imports' => [
                'case_sensitive' => true,
                'imports_order' => [
                    'class',
                    'function',
                    'const',
                ],
            ],
            'single_import_per_statement' => true,
            'single_line_after_imports' => true,
            'combine_consecutive_issets' => true,
            'combine_consecutive_unsets' => true,
            'declare_equal_normalize' => true,
            'declare_parentheses' => true,
            'dir_constant' => true,
            'error_suppression' => [
                'mute_deprecation_error' => false,
                'noise_remaining_usages' => true,
            ],
            'explicit_indirect_variable' => true,
            'function_to_constant' => true,
            'get_class_to_class_keyword' => true,
            'is_null' => true,
            'no_unset_on_property' => true,
            'nullable_type_declaration' => [
                'syntax' => 'union',
            ],
            'single_space_around_construct' => true,
            'list_syntax' => true,
            'blank_line_after_namespace' => true,
            'blank_lines_before_namespace' => true,
            'clean_namespace' => true,
            'no_leading_namespace_whitespace' => true,
            'no_homoglyph_names' => true,
            'assign_null_coalescing_to_coalesce_equal' => true,
            'binary_operator_spaces' => true,
            'concat_space' => [
                'spacing' => 'one',
            ],
            'increment_style' => true,
            'logical_operators' => true,
            'long_to_shorthand_operator' => true,
            'new_with_parentheses' => [
                'anonymous_class' => false,
            ],
            'no_space_around_double_colon' => true,
            'no_useless_concat_operator' => [
                'juggle_simple_strings' => true,
            ],
            'no_useless_nullsafe_operator' => true,
            'object_operator_without_whitespace' => true,
            'operator_linebreak' => true,
            'standardize_increment' => true,
            'standardize_not_equals' => true,
            'ternary_operator_spaces' => true,
            'ternary_to_elvis_operator' => true,
            'ternary_to_null_coalescing' => true,
            'unary_operator_spaces' => true,
            'blank_line_after_opening_tag' => true,
            'echo_tag_syntax' => [
                'shorten_simple_statements_only' => false,
            ],
            'full_opening_tag' => true,
            'linebreak_after_opening_tag' => true,
            'no_closing_tag' => true,
            'php_unit_construct' => true,
            'php_unit_data_provider_name' => true,
            'php_unit_data_provider_return_type' => true,
            'php_unit_data_provider_static' => [
                'force' => true,
            ],
            'php_unit_dedicate_assert' => true,
            'php_unit_dedicate_assert_internal_type' => true,
            'php_unit_expectation' => true,
            'php_unit_internal_class' => [
                'types' => [
                    'abstract',
                    'final',
                    'normal',
                ],
            ],
            'php_unit_fqcn_annotation' => true,
            'php_unit_method_casing' => true,
            'php_unit_mock' => true,
            'php_unit_mock_short_will_return' => true,
            'php_unit_namespaced' => true,
            'php_unit_no_expectation_annotation' => true,
            'php_unit_set_up_tear_down_visibility' => true,
            'php_unit_strict' => true,
            'php_unit_test_annotation' => true,
            'php_unit_test_case_static_method_calls' => true,
            'align_multiline_comment' => [
                'comment_type' => 'phpdocs_like',
            ],
            'general_phpdoc_annotation_remove' => [
                'annotations' => [
                    'throws',
                    'author',
                    'after',
                    'afterClass',
                    'backupGlobals',
                    'backupStaticAttributes',
                    'before',
                    'beforeClass',
                    'codeCoverageIgnore',
                    'codeCoverageIgnoreStart',
                    'codeCoverageIgnoreEnd',
                    'covers',
                    'coversDefaultClass',
                    'coversNothing',
                    'dataProvider',
                    'depends',
                    'doesNotPerformAssertions',
                    'group',
                    'large',
                    'medium',
                    'preserveGlobalState',
                    'requires',
                    'runTestsInSeparateProcesses',
                    'runInSeparateProcess',
                    'small',
                    'test',
                    'testdox',
                    'testWith',
                    'ticket',
                    'uses',
                ],
                'case_sensitive' => false,
            ],
            'general_phpdoc_tag_rename' => [
                'replacements' => [
                    'inheritDocs' => 'inheritDoc',
                ],
            ],
            'no_blank_lines_after_phpdoc' => true,
            'no_empty_phpdoc' => true,
            'no_superfluous_phpdoc_tags' => [
                'remove_inheritdoc' => true,
            ],
            'phpdoc_align' => [
                'align' => 'left',
                'tags' => [
                    'param',
                    'property',
                    'property-read',
                    'property-write',
                    'phpstan-param',
                    'phpstan-property',
                    'phpstan-property-read',
                    'phpstan-property-write',
                    'phpstan-assert',
                    'phpstan-assert-if-true',
                    'phpstan-assert-if-false',
                    'psalm-param',
                    'psalm-param-out',
                    'psalm-property',
                    'psalm-property-read',
                    'psalm-property-write',
                    'psalm-assert',
                    'psalm-assert-if-true',
                    'psalm-assert-if-false',
                    'method',
                    'phpstan-method',
                    'psalm-method',
                    'return',
                    'throws',
                    'type',
                    'var',
                ],
            ],
            'phpdoc_annotation_without_dot' => true,
            'phpdoc_array_type' => true,
            'phpdoc_indent' => true,
            'phpdoc_inline_tag_normalizer' => true,
            'phpdoc_line_span' => true,
            'phpdoc_list_type' => true,
            'phpdoc_no_access' => true,
            'phpdoc_no_alias_tag' => true,
            'phpdoc_no_empty_return' => true,
            'phpdoc_no_package' => true,
            'phpdoc_no_useless_inheritdoc' => true,
            'phpdoc_order' => [
                'order' => [
                    'template',
                    'param',
                    'return',
                    'throws',
                    'phpstan-assert',
                    'psalm-assert',
                ],
            ],
            'phpdoc_order_by_value' => [
                'annotations' => [
                    'author',
                    'covers',
                    'coversNothing',
                    'dataProvider',
                    'depends',
                    'group',
                    'internal',
                    'method',
                    'mixin',
                    'property',
                    'property-read',
                    'property-write',
                    'requires',
                    'throws',
                    'uses',
                ],
            ],
            'phpdoc_param_order' => true,
            'phpdoc_return_self_reference' => true,
            'phpdoc_scalar' => true,
            'phpdoc_separation' => true,
            'phpdoc_single_line_var_spacing' => true,
            'phpdoc_summary' => true,
            'phpdoc_tag_casing' => true,
            'phpdoc_tag_type' => [
                'tags' => [
                    'inheritDoc' => 'inline',
                ],
            ],
            'phpdoc_to_comment' => [
                'allow_before_return_statement' => true,
            ],
            'phpdoc_trim' => true,
            'phpdoc_trim_consecutive_blank_line_separation' => true,
            'phpdoc_types' => true,
            'phpdoc_types_order' => [
                'case_sensitive' => true,
                'null_adjustment' => 'always_last',
            ],
            'phpdoc_var_annotation_correct_order' => true,
            'phpdoc_var_without_name' => true,
            'no_useless_return' => true,
            'return_assignment' => true,
            'simplified_null_return' => true,
            'multiline_whitespace_before_semicolons' => true,
            'no_empty_statement' => true,
            'no_singleline_whitespace_before_semicolons' => true,
            'semicolon_after_instruction' => true,
            'space_after_semicolon' => [
                'remove_in_empty_for_expressions' => true,
            ],
            'declare_strict_types' => true,
            'strict_comparison' => true,
            'strict_param' => true,
            'explicit_string_variable' => true,
            'heredoc_closing_marker' => [
                'closing_marker' => 'EOF',
                'explicit_heredoc_style' => true,
            ],
            'heredoc_to_nowdoc' => true,
            'multiline_string_to_heredoc' => true,
            'no_binary_string' => true,
            'no_trailing_whitespace_in_string' => true,
            'simple_to_complex_string_variable' => true,
            'single_quote' => [
                'strings_containing_single_quote_chars' => true,
            ],
            'string_implicit_backslashes' => true,
            'string_length_to_empty' => true,
            'string_line_ending' => true,
            'array_indentation' => true,
            'blank_line_before_statement' => [
                'statements' => [
                    'break',
                    'case',
                    'continue',
                    'declare',
                    'default',
                    'do',
                    'exit',
                    'for',
                    'foreach',
                    'goto',
                    'if',
                    'include',
                    'include_once',
                    'phpdoc',
                    'require',
                    'require_once',
                    'return',
                    'switch',
                    'throw',
                    'try',
                    'while',
                    'yield',
                    'yield_from',
                ],
            ],
            'blank_line_between_import_groups' => true,
            'compact_nullable_type_declaration' => true,
            'heredoc_indentation' => true,
            'indentation_type' => true,
            'line_ending' => true,
            'method_chaining_indentation' => true,
            'no_extra_blank_lines' => [
                'tokens' => [
                    'attribute',
                    'break',
                    'case',
                    'continue',
                    'curly_brace_block',
                    'default',
                    'extra',
                    'parenthesis_brace_block',
                    'return',
                    'square_brace_block',
                    'switch',
                    'throw',
                    'use',
                    'use_trait',
                ],
            ],
            'no_spaces_around_offset' => true,
            'no_trailing_whitespace' => true,
            'no_whitespace_in_blank_line' => true,
            'single_blank_line_at_eof' => true,
            'spaces_inside_parentheses' => true,
            'statement_indentation' => [
                'stick_comment_to_next_continuous_control_statement' => true,
            ],
            'type_declaration_spaces' => true,
            'types_spaces' => true,
        ];
    }
}
