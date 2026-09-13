
document.addEventListener("DOMContentLoaded",()=>{
  const roleInputs=[...document.querySelectorAll('input[name="registering_as[]"]')];
  const sections={
    Innovator:["Innovator","Startup"],
    Investor:["Investor","Venture Capital"],
    Mentor:["Mentor","Skill Expert"],
    Institution:["Incubation Centre","Educational Institution"],
    Industry:["Industry","CSR Organisation","NGO"],
    Individual:["Individual Helping Hand"]
  };
  const ids={
    Innovator:"innovatorStartupSection",
    Investor:"investorSection",
    Mentor:"mentorSection",
    Institution:"institutionSection",
    Industry:"industrySection",
    Individual:"individualSection"
  };
  function update(){
    const selected=roleInputs.filter(x=>x.checked).map(x=>x.value);
    Object.keys(sections).forEach(k=>{
      const el=document.getElementById(ids[k]);
      if(!el)return;
      const show=sections[k].some(r=>selected.includes(r));
      el.classList.toggle("show",show);
    });
    const c=document.getElementById("roleCount");
    if(c)c.textContent=selected.length;
  }
  roleInputs.forEach(x=>x.addEventListener("change",update));
  update();

  document.querySelectorAll('input[type="tel"]').forEach(el=>{
    el.addEventListener("input",()=>el.value=el.value.replace(/\D/g,"").slice(0,10));
  });

  document.querySelectorAll("form").forEach(form=>{
    form.addEventListener("submit",e=>{
      if(!form.checkValidity()){
        e.preventDefault();e.stopPropagation();form.classList.add("was-validated");
        const bad=form.querySelector(":invalid");
        if(bad)bad.scrollIntoView({behavior:"smooth",block:"center"});
      }
    });
  });
});
