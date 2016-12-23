<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Dick Crud Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the CRUD interface.
    | You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    // Create form
    'add'                 => 'Thêm',
    'back_to_all'         => 'Về trang quản lý ',
    'cancel'              => 'Hủy',
    'add_a_new'           => 'Thêm mới',

        // Create form - advanced options
        'after_saving'            => 'Sau khi lưu',
        'go_to_the_table_view'    => 'Trở về trang quản lý',
        'let_me_add_another_item' => 'Thêm một dữ liệu mới',
        'edit_the_new_item'       => 'Về trang chỉnh sửa',

    // Edit form
    'edit'                 => 'Sửa',
    'save'                 => 'Lưu',

    // Revisions
    'revisions'            => 'Xem lại',
    'no_revisions'         => 'Không tìm thấy',
    'created_this'          => 'created this',
    'changed_the'          => 'changed the',
    'restore_this_value'   => 'Restore this value',
    'from'                 => 'from',
    'to'                   => 'to',
    'undo'                 => 'Undo',
    'revision_restored'    => 'Revision successfully restored',

    // CRUD table view
    'all'                       => 'Tất cả ',
    'in_the_database'           => 'trong cơ sở dữ liệu',
    'list'                      => 'Danh sách',
    'actions'                   => 'Hành động',
    'preview'                   => 'Xem trước',
    'delete'                    => 'Xóa',
    'admin'                     => 'Admin',
    'details_row'               => 'Đây là hàng chi tiết. Sửa đổi khi bạn hài lòng.',
    'details_row_loading_error' => 'Có lỗi khi tải chi tiết. Vui lòng thử lại.',

        // Confirmation messages and bubbles
        'delete_confirm'                              => 'Bạn có chắc bạn muốn xóa mục này?',
        'delete_confirmation_title'                   => 'Mục cần xóa',
        'delete_confirmation_message'                 => 'Các mục đã được xóa thành công.',
        'delete_confirmation_not_title'               => 'Không xóa',
        'delete_confirmation_not_message'             => "Đã có một lỗi. Dữ liệu của bạn có thể không bị xóa.",
        'delete_confirmation_not_deleted_title'       => 'Không xóa',
        'delete_confirmation_not_deleted_message'     => 'Không có chuyện gì xảy ra. Dữ liệu của bạn được an toàn.',

        // DataTables translation
        'emptyTable'     => 'không có dữ liệu trong bảng',
        'info'           => 'Hiển thị _START_ đến _END_ trên _TOTAL_ bản ghi',
        'infoEmpty'      => 'Hiển thị 0 đến 0 trên 0 bản ghi',
        'infoFiltered'   => '(Lọc từ _MAX_ tổng số bản ghi)',
        'infoPostFix'    => '',
        'thousands'      => ',',
        'lengthMenu'     => '_MENU_ bản ghi trên trang',
        'loadingRecords' => 'Loading...',
        'processing'     => 'Processing...',
        'search'         => 'Tìm kiếm: ',
        'zeroRecords'    => 'Không tìm thấy kết quả',
        'paginate'       => [
            'first'    => 'First',
            'last'     => 'Last',
            'next'     => 'Next',
            'previous' => 'Previous',
        ],
        'aria' => [
            'sortAscending'  => ': Ấn để sắp xếp cột tăng dần',
            'sortDescending' => ': Ấn để sắp xếp cột giảm dần',
        ],

    // global crud - errors
    'unauthorized_access' => 'Truy cập trái phép - bạn không có các quyền cần thiết để xem trang này.',
    'please_fix' => 'Hãy sửa các lỗi sau đây:',

    // global crud - success / error notification bubbles
    'insert_success' => 'Các mục đã được thêm thành công.',
    'update_success' => 'Các mục đã được sửa đổi thành công.',

    // CRUD reorder view
    'reorder'                      => 'Sắp xếp lại',
    'reorder_text'                 => 'Sử dụng kéo và thả để sắp xếp lại.',
    'reorder_success_title'        => 'Hoàn thành',
    'reorder_success_message'      => 'Thông tin của bạn đã được lưu',
    'reorder_error_title'          => 'Lỗi!',
    'reorder_error_message'        => 'Thông tin của bạn không được lưu',

    // CRUD yes/no
    'yes' => 'Yes',
    'no' => 'No',

    // Fields
    'browse_uploads' => 'Upload Image',
    'clear' => 'Xóa',
    'page_link' => 'Page link',
    'page_link_placeholder' => 'http://example.com/your-desired-page',
    'internal_link' => 'Liên kết nội bộ',
    'internal_link_placeholder' => 'Internal slug. Ex: \'admin/page\' (no quotes) for \':url\'',
    'external_link' => 'Liên kết bên ngoài',
    'choose_file' => 'Chọn file',

    //Table field
    'table_cant_add' => 'Không thể thêm mới :entity',
    'table_max_reached' => 'Số lượng tối đa :max reached',

];
