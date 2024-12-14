-   Khi người dùng gửi yêu cầu lên server thì server sẽ xử lý một việc gì đó (xử lý logic trong action) sau đó trả ra một cái gì đó (html hoặc yêu cầu điều hướng)

-   Biến request (yêu cầu): là biến chứa thông tin từ yêu cầu gửi lên của người dùng (dữ liệu nhập từ form, dữ liệu trên thanh địa chỉ, thông tin về thiết bị người dùng, thông tin của server,...)

cấu trúc thư mục laravel gồm 4 phần chính.

1. Route (Đường): Chứa tất cả đường dẫn của hệ thống, khi một đường dẫn được trùng trong danh sách đã được định nghĩa thì
   sẽ gọi tới controller xử lý code tương ứng. /routes/web.php
2. Controller (bộ điều khiển): chứa các action là hàm (hành động) Là nơi xử lý các logic của hệ thống đảm nhận vai trò giao tiếp database và view. /app/http/Controllers
3. Model (khuôn mẫu): Mỗi model là ánh xạ tới một bảng trong database, model dùng các lệnh để giao tiếp với database gọi đến bảng tương ứng. /app/models
4. View (giao diện): Nhận dữ liệu từ controller và hiển thị giao diện. Resources/View
5. Public (Công khai): Đây là thư mục chứa tất cả các tài nguyên của hệ thống

File .env: là file cấu hình của hệ thống đặt một số biến toàn cục để cấu hình kết nối database

Lệnh chạy ứng dụng: php artisan serve

1. lệnh để tạo controller: php artisan make:controller UserController

Một số từ database dùng trong model:

1. find (tìm): tìm (lấy ra) một bản ghi. (đây là một đối tượng của model tương ứng)
2. first (một): lấy ra một bản ghi. (đây là một đối tượng của model tương ứng)
3. get (lấy): lấy ra danh sách bản ghi. (đây là một mảng các đối tượng của model tương ứng)
4. where (điều kiện): thêm điều kiện vào câu query (truy vấn). khi gọi sẽ là: where(tên cột, điều kiện, giá trị). ví dụ: where('Name', '>', 'bắc')
5. select (lấy cột): sẽ chỉ định những cột được lấy trong câu sql. Khi gọi sẽ là: select(tên cột,...,). Ví dụ: select("Name", "id", "address")
   => Tổng kết: để viết một câu sql hoàn chỉnh thì dùng model gọi đến các hàm (muốn where thì gọi đến where, muốn select thì gọi đến hàm select)trên muốn sử dụng cuối cùng sử dụng hàm (find, first, get) để lấy dữ liệu

Ví dụ: Sử dụng bảng Users để lấy danh sách người dùng với id > 3, chỉ lấy ra các trường id, Name, address
User::select('id', 'Name', 'address')->where('id', '>', 3)->where('Name', '=', 'bắc')->get();

Lệnh thêm vào database:

1. create (tạo): tạo một đối tượng trong database và trả về đối tượng đó. Ví dụ: User::create(đối tượng cần thêm)
2. insert (thêm): Thêm một hoặc nhiều đối tượng vào database và không trả về gì hết. Ví dụ: User::insert(đối tượng cần thêm)

Lệnh sửa trong database:

1. Update (cập nhật / sửa ): Cập nhật đối tượng trong database theo điều kiện được tạo trước.
   Ví dụ: cập nhật thông tin những bản ghi có id lớn hơn 3, sửa tên thành 'đạt'.
   User::where('id', '>', 3)->update([
   'name' => 'đạt'
   ]);

Lệnh xoá trong database:

1. delete (xoá): Xoá một bản ghi trong database theo điều kiện được tạo trước.
   Ví dụ: xoá những người dùng id lớn hơn 3.
   User::where('id', '>', 3)->delete();

Làm việc với database (thêm cột, sửa cột, xoá cột) bằng code (không thao tác trực tiếp trong myadmin):

Thao tác với database

1. Tạo file migration (databases/migrations): php artisan make:migration tên_file

tên file là
Tạo bảng: create_users_table
Thêm cột vô bảng: add_name_column_to_users_table

trong bảng category thêm một cột là is_show_home_page, mặc định là 0, những danh mục nào có giá trị là 1 thì sẽ hiển thị ở home, những danh mục nào nào có giá trị là 2 hiển thị ở Shop.
trong trang Admin chỉnh sửa category thêm một nút chọn trạng thái nhưng nút này lưu giá trị của biến is_show_home_page vào database
chỉnh sửa ở chỗ View Home category lấy thêm điều kiện is_home_page = 1 thì hiển thị ở home còn is_show_home_page = 2 thì hiển thị ở  view-Shop
