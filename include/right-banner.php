<style>
.right-banner {
  width: 160px;            /* šaurāka sleja */
  margin: 0 5px;
  flex-shrink: 0;
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.right-banner .banner-item {
  width: 160px;            
  background-color: #ffc107;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #000;
  font-weight: bold;
  border-radius: 0;
  flex-shrink: 0;
}

/* dažādi augstumi */
.banner-160x250 { height: 250px; }
.banner-160x600 { height: 600px; }
.banner-160x100 { height: 100px; }
</style>

<div class="right-banner">
  <div class="banner-item banner-160x250">Vieta jūsu reklāmai 160*250</div>
  <div class="banner-item banner-160x600">Vieta jūsu reklāmai 160*600</div>
  <div class="banner-item banner-160x100">Vieta jūsu reklāmai 160*100</div>
  <div class="banner-item banner-160x250">Vieta jūsu reklāmai 160*250</div>
  <div class="banner-item banner-160x600">Vieta jūsu reklāmai 160*600</div>
  <div class="banner-item banner-160x100">Vieta jūsu reklāmai 160*100</div>
</div>