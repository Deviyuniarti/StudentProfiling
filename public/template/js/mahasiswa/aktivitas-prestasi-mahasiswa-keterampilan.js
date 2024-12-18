function loadSkills() {
  const skills = JSON.parse(localStorage.getItem("skills")) || [];
  const skillDataContainer = document.getElementById("skillData");

  // Clear existing content
  skillDataContainer.innerHTML = "";

  // Menampilkan setiap keterampilan yang disimpan
  skills.forEach((skill, index) => {
    let mediaContent = "";
    if (skill.media) {
      mediaContent = `<img src="${skill.media}" alt="Media" class="skill-media-image" style="width: 500px; height: 200px;"/>`;
    } else {
      mediaContent = "No media uploaded";
    }

    const skillHTML = `
        <div class="skill-item" id="skill-${index}">
        <div class="skill-detail">
          <p><strong>Judul Keterampilan:</strong></p>
          <p class="skill-value">${skill.title}</p>
        </div>
        <div class="skill-detail">
          <p><strong>Deskripsi:</strong></p>
          <p class="skill-value">${skill.description}</p>
        </div>
        <div class="skill-detail">
          <p><strong>Keterampilan:</strong></p>
          <p class="skill-value">${skill.level}</p>
        </div>
        <div class="skill-detail">
          <p><strong>Media:</strong></p>
          <div class="skill-media-container">${mediaContent}</div>
        </div>
        <button class="delete-btn" onclick="deleteSkill(${index})">Hapus</button>
      </div>
      `;
    skillDataContainer.innerHTML += skillHTML;
  });
}

function saveSkillToLocalStorage(title, description, level, mediaFile) {
  const skills = JSON.parse(localStorage.getItem("skills")) || [];

  let mediaURL = null;
  if (mediaFile) {
    mediaURL = URL.createObjectURL(mediaFile); // Buat URL blob untuk file
  }

  const newSkill = { title, description, level, media: mediaURL };
  skills.push(newSkill);

  localStorage.setItem("skills", JSON.stringify(skills));
}

// Ketika tombol 'Simpan' pada form popup ditekan
document
  .getElementById("skillForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    const title = document.getElementById("skillTitle").value;
    const description = document.getElementById("skillDescription").value;
    const level = document.getElementById("tagsInput").value;
    const mediaFile = document.getElementById("skillMedia").files[0];

    saveSkillToLocalStorage(title, description, level, mediaFile);

    document.getElementById("popup").style.display = "none";
    loadSkills();
  });

// Show popup when the '+' button is clicked
document.getElementById("addSkillBtn").addEventListener("click", function () {
  const popup = document.getElementById("popup");
  popup.style.display = "block";
  document.body.style.overflow = "hidden"; // Mencegah scroll di belakang pop-up
});

// Menangani perubahan input file untuk menampilkan preview gambar
document
  .getElementById("skillMedia")
  .addEventListener("change", function (event) {
    const fileInput = event.target;
    const file = fileInput.files[0];
    const imagePreview = document.getElementById("imagePreview");

    if (file) {
      // Menampilkan hanya nama file
      imagePreview.innerHTML = "";
    } else {
      imagePreview.innerHTML = "";
    }
  });

document.getElementById("closePopup").addEventListener("click", function () {
  const popup = document.getElementById("popup");
  popup.style.display = "none";
  document.body.style.overflow = ""; // Kembalikan scroll
});

// Fungsi untuk menghapus keterampilan dari LocalStorage
function deleteSkill(index) {
  const skills = JSON.parse(localStorage.getItem("skills")) || [];
  const removedSkill = skills.splice(index, 1)[0];

  // Lepaskan URL blob jika ada media
  if (removedSkill.media) {
    URL.revokeObjectURL(removedSkill.media);
  }

  localStorage.setItem("skills", JSON.stringify(skills));
  loadSkills();
}

// Handle dropdown toggle to show/hide skill data
// Toggle dropdown untuk membuka/menutup
document.getElementById("dropdownBtn").addEventListener("click", function () {
  const toggleContent = document.getElementById("toggleContent");
  const dropdownBtn = document.getElementById("dropdownBtn");

  // Menambahkan class 'open' untuk mengubah ikon
  dropdownBtn.classList.toggle("open");

  if (toggleContent.style.display === "block") {
    toggleContent.style.display = "none"; // Sembunyikan konten
  } else {
    toggleContent.style.display = "block"; // Tampilkan konten
  }
});

// Muat keterampilan saat halaman pertama kali dibuka
window.addEventListener("load", function () {
  loadSkills();
});

function loadExperiences() {
  const experiences = JSON.parse(localStorage.getItem("experiences")) || [];
  const experienceDataContainer = document.getElementById("experienceData");

  // Clear existing content
  experienceDataContainer.innerHTML = "";

  // Menampilkan setiap pengalaman yang disimpan
  experiences.forEach((experience, index) => {
    let certificateContent = "";
    if (experience.certificate) {
      certificateContent = `<img src="${experience.certificate}" alt="Sertifikat" class="skill-media-image" style="width: 500px; height: 200px;"/>`;
    } else {
      certificateContent = "No certificate uploaded";
    }

    const experienceHTML = `
      <div class="skill-item" id="experience-${index}">
        <div class="skill-detail">
          <p><strong>Judul Pengalaman:</strong></p>
          <p class="skill-value">${experience.title}</p>
        </div>
        <div class="skill-detail">
          <p><strong>Posisi:</strong></p>
          <p class="skill-value">${experience.position}</p>
        </div>
        <div class="skill-detail">
          <p><strong>Nama Instansi:</strong></p>
          <p class="skill-value">${experience.company}</p>
        </div>
        <div class="skill-detail">
          <p><strong>Sertifikat:</strong></p>
          <div class="skill-media-container">${certificateContent}</div>
        </div>
        <button class="delete-btn" onclick="deleteExperience(${index})">Hapus</button>
      </div>
    `;
    experienceDataContainer.innerHTML += experienceHTML;
  });
}

function saveExperienceToLocalStorage(
  title,
  position,
  company,
  certificateFile
) {
  const experiences = JSON.parse(localStorage.getItem("experiences")) || [];

  let certificateURL = null;
  if (certificateFile) {
    certificateURL = URL.createObjectURL(certificateFile); // Create a blob URL for the certificate file
  }

  const newExperience = {
    title,
    position,
    company,
    certificate: certificateURL,
  };
  experiences.push(newExperience);

  localStorage.setItem("experiences", JSON.stringify(experiences));
}

// Handle form submission for experience
document
  .getElementById("experienceForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    const title = document.getElementById("experienceTitle").value;
    const position = document.getElementById("experiencePosition").value;
    const company = document.getElementById("experienceCompany").value;
    const certificateFile = document.getElementById("experienceCertificate")
      .files[0];

    saveExperienceToLocalStorage(title, position, company, certificateFile);

    document.getElementById("popupExperience").style.display = "none";
    loadExperiences();
  });

// Show popup when the '+' button is clicked
document
  .getElementById("addExperienceBtn")
  .addEventListener("click", function () {
    const popup = document.getElementById("popupExperience");
    popup.style.display = "block";
    document.body.style.overflow = "hidden"; // Disable scrolling behind the popup
  });

// Handle file input for certificate preview
document
  .getElementById("experienceCertificate")
  .addEventListener("change", function (event) {
    const fileInput = event.target;
    const file = fileInput.files[0];
    const certificatePreview = document.getElementById("certificatePreview");

    if (file) {
      // Menampilkan hanya nama file
      certificatePreview.innerHTML = "";
    } else {
      certificatePreview.innerHTML = "";
    }
  });

document
  .getElementById("closePopupExperience")
  .addEventListener("click", function () {
    const popup = document.getElementById("popupExperience");
    popup.style.display = "none";
    document.body.style.overflow = ""; // Enable scrolling
  });

// Function to delete experience
function deleteExperience(index) {
  const experiences = JSON.parse(localStorage.getItem("experiences")) || [];
  const removedExperience = experiences.splice(index, 1)[0];

  if (removedExperience.certificate) {
    URL.revokeObjectURL(removedExperience.certificate);
  }

  localStorage.setItem("experiences", JSON.stringify(experiences));
  loadExperiences();
}

// Handle dropdown toggle for experiences
document
  .getElementById("dropdownBtnExperience")
  .addEventListener("click", function () {
    const toggleContent = document.getElementById("toggleContentExperience");
    const dropdownBtn = document.getElementById("dropdownBtnExperience");

    dropdownBtn.classList.toggle("open");

    if (toggleContent.style.display === "block") {
      toggleContent.style.display = "none";
    } else {
      toggleContent.style.display = "block";
    }
  });

// Load experiences when the page first loads
window.addEventListener("load", function () {
  loadExperiences();
});


const selectedTags = []; // Array untuk menyimpan tag yang dipilih

document.getElementById('tagsInput').addEventListener('input', async function (e) {
  const query = e.target.value;

  if (query.length > 0) {
    try {
      const response = await fetch(`/tags?q=${query}`);
      const suggestions = await response.json();

      const suggestionBox = document.getElementById('tagSuggestions');
      suggestionBox.style.display = 'block';
      suggestionBox.innerHTML = suggestions
        .filter((tag) => !selectedTags.includes(tag)) // Hindari tag yang sudah dipilih
        .map((tag) => `<div class="tag-suggestion">${tag}</div>`)
        .join('');

      // Event listener untuk memilih tag
      document.querySelectorAll('.tag-suggestion').forEach((item) => {
        item.addEventListener('click', () => {
          const selectedTag = item.textContent;

          // Tambahkan tag ke array jika belum ada
          if (!selectedTags.includes(selectedTag)) {
            selectedTags.push(selectedTag);

            // Tambahkan tag ke container
            const selectedTagsContainer = document.getElementById('selectedTags');
            const tagElement = document.createElement('span');
            tagElement.className = 'selected-tag';
            tagElement.innerHTML = `
              ${selectedTag}
              <span class="remove-tag" data-tag="${selectedTag}">x</span>
            `;
            selectedTagsContainer.appendChild(tagElement);

            // Event listener untuk menghapus tag
            tagElement.querySelector('.remove-tag').addEventListener('click', (e) => {
              const tagToRemove = e.target.getAttribute('data-tag');
              selectedTags.splice(selectedTags.indexOf(tagToRemove), 1); // Hapus dari array
              tagElement.remove(); // Hapus dari DOM
            });
          }

          // Kosongkan input dan sembunyikan suggestion box
          document.getElementById('tagsInput').value = '';
          suggestionBox.style.display = 'none';
        });
      });
    } catch (error) {
      console.error('Error fetching suggestions:', error);
    }
  } else {
    document.getElementById('tagSuggestions').style.display = 'none';
  }
});

