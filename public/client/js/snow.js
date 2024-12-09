const snowContainer = document.querySelector(".snow-container");

function createSnowflake() {
    const snowflake = document.createElement("img"); // Tạo thẻ img
    snowflake.classList.add("snowflake");
    snowflake.src = "/client/img/hoadao1.png"; // Đường dẫn tới ảnh bông tuyết
    snowflake.style.left = Math.random() * 100 + "vw"; // Vị trí ngang ngẫu nhiên
    snowflake.style.animationDuration = Math.random() * 12 + 10 + "s"; // Thời gian rơi (7-12 giây)
    snowflake.style.width = Math.random() * 30 + 15 + "px"; // Kích thước ngẫu nhiên

    snowContainer.appendChild(snowflake);

    // Xóa bông tuyết sau khi rơi xong
    setTimeout(() => {
        snowflake.remove();
    }, 12000); // Xóa sau 12 giây
}

setInterval(createSnowflake, 500); // Tạo bông tuyết mỗi 50ms
