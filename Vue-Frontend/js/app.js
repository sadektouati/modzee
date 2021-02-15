      new Vue({
         el: '#main-container',
         data: {
            name: "... ... ...",
            "email": "... ... ... ...",
            "phone": '.. .. .. ..',
            "bio": ".. .. ... ... ... ....",
            "profile_picture": "images/profile.jpeg",
            "galleries": [
                  {
                  "id": 48,
                  "photographer_id": 12,
                  "title": ".. ... ...",
                  "description": ".. .. .. ..",
                  "img": "",
                  "featured": 1,
                  "created_at": ".. .. .. .. ..",
                  "updated_at": ".. .. .. .. .."
                  },
                  {
                  "id": 48,
                  "photographer_id": 12,
                  "title": ".. ... ...",
                  "description": ".. .. .. ..",
                  "img": "",
                  "featured": 1,
                  "created_at": ".. .. .. .. ..",
                  "updated_at": ".. .. .. .. .."
                  },
                  {
                  "id": 48,
                  "photographer_id": 12,
                  "title": ".. ... ...",
                  "description": ".. .. .. ..",
                  "img": "",
                  "featured": 1,
                  "created_at": ".. .. .. .. ..",
                  "updated_at": ".. .. .. .. .."
                  },
                  {
                  "id": 48,
                  "photographer_id": 12,
                  "title": ".. ... ...",
                  "description": ".. .. .. ..",
                  "img": "",
                  "featured": 1,
                  "created_at": ".. .. .. .. ..",
                  "updated_at": ".. .. .. .. .."
                  }
                  ]
         },
         methods: {
         },
         computed: {
            question: function () {
            }
         },
         mounted: function (){
            data = fetch('http://localhost:8000/api/photographer')
                  .then((response)=>{
                     return response.json()
                  }).then((dataObject) =>{
                     artisData = dataObject[0];
                 this.name = artisData.name
                 this.email = artisData.email
                 this.phone = artisData.phone
                 this.bio = artisData.bio
                 this.profile_picture = artisData.profile_picture
                 this.galleries = artisData.galleries;
                  }).catch((err)=>{
                     alert("please make sure you have the api running");
                  })
         }
      })