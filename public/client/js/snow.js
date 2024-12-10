const snowContainer = document.querySelector(".snow-container");

function createSnowflake() {
    const snowflake = document.createElement("img"); // Tạo thẻ img
    snowflake.classList.add("snowflake");
    snowflake.src = "/client/img/hoadao1.png"; // Đường dẫn tới ảnh hoa đào
    snowflake.style.left = Math.random() * 100 + "vw"; // Vị trí ngang ngẫu nhiên
    snowflake.style.animationDuration = Math.random() * 20 + 15 + "s"; // Thời gian rơi (15-35 giây)
    snowflake.style.width = Math.random() * 15 + 5 + "px"; // Kích thước ngẫu nhiên (5px - 20px)

    snowContainer.appendChild(snowflake);

    // Xóa hoa đào sau khi rơi xong
    setTimeout(() => {
        snowflake.remove();
    }, 35000); // Xóa sau 35 giây (tương ứng với animationDuration lớn nhất)
}

setInterval(createSnowflake, 500); // Tạo hoa đào mỗi 500ms
