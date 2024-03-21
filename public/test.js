const data =
    {
    "4": {
        "English": {
            "session": "2023/2024",
            "term": "first",
            "class": 17,
            "classname": "JSS3",
            "total": 60,
            "result": [
                {
                    "category": "Assignment 2",
                    "score": 6,
                    "count": 2,
                    "finalScore": 3
                },
                {
                    "category": "continuous assessment 2",
                    "score": 10,
                    "count": 1,
                    "finalScore": 10
                },
                {
                    "category": "Final exam",
                    "score": 27,
                    "count": 1,
                    "finalScore": 27
                },
                {
                    "category": "continuous assessment 1",
                    "score": 10,
                    "count": 1,
                    "finalScore": 10
                },
                {
                    "category": "class exercise",
                    "score": 14,
                    "count": 2,
                    "finalScore": 7
                },
                {
                    "category": "Assignment 1",
                    "score": 6,
                    "count": 2,
                    "finalScore": 3
                }
            ]
        },
        "Chemistry": {
            "session": "2023/2024",
            "term": "first",
            "class": 18,
            "classname": "SS1",
            "total": 67,
            "result": [
                {
                    "category": "Assignment 1",
                    "score": 6,
                    "count": 2,
                    "finalScore": 3
                },
                {
                    "category": "Assignment 2",
                    "score": 3,
                    "count": 1,
                    "finalScore": 3
                },
                {
                    "category": "continuous assessment 2",
                    "score": 10,
                    "count": 1,
                    "finalScore": 10
                },
                {
                    "category": "project / practical",
                    "score": 7,
                    "count": 1,
                    "finalScore": 7
                },
                {
                    "category": "continuous assessment 1",
                    "score": 10,
                    "count": 1,
                    "finalScore": 10
                },
                {
                    "category": "class exercise",
                    "score": 7,
                    "count": 1,
                    "finalScore": 7
                },
                {
                    "category": "Final exam",
                    "score": 27,
                    "count": 1,
                    "finalScore": 27
                }
            ]
        }
    },
    "5": {
        "English": {
            "session": "2023/2024",
            "term": "second",
            "class": 18,
            "classname": "SS1",
            "total": 95.25,
            "result": [
                {
                    "category": "Assignment 1",
                    "score": 8,
                    "count": 2,
                    "finalScore": 4
                },
                {
                    "category": "class exercise",
                    "score": 17,
                    "count": 2,
                    "finalScore": 8.5
                },
                {
                    "category": "continuous assessment 1",
                    "score": 15,
                    "count": 1,
                    "finalScore": 15
                },
                {
                    "category": "Final exam",
                    "score": 48.75,
                    "count": 1,
                    "finalScore": 48.75
                },
                {
                    "category": "continuous assessment 2",
                    "score": 15,
                    "count": 1,
                    "finalScore": 15
                },
                {
                    "category": "Assignment 2",
                    "score": 8,
                    "count": 2,
                    "finalScore": 4
                }
            ]
        }
    }
}


//console.log(data)


const result =[]
const term = []
const session = Object.keys(data) //will return ["4","5"]
//store [4,5] in a variable session
session.forEach((sub)=>{
term.push(data[sub]) //this will push each subject and their values 
})
//console.log( Object.keys(term))
//result = [{session,term,subjects:[{subject:english,score:10}]}]
term.forEach((sub,i)=>{
    //term.push(data[sub])
     //this will push each subject and their values 

     Object.keys(sub).forEach((supersub)=>{
        console.log(result.length )
        if (result.length === 0){
            result.push({session:sub[supersub].session,term:sub[supersub].term,class:sub[supersub].classname,subjects:[{subject:supersub,score:sub[supersub].total}]})

        }else{
            result.forEach((res)=>{
                if(res.session == sub[supersub].session && res.term == sub[supersub].term){
                res.subjects.push({subject:supersub,score:sub[supersub].total})
            }else{
                result.push({session:sub[supersub].session,term:sub[supersub].term,class:sub[supersub].classname,subjects:[{subject:supersub,score:sub[supersub].total}]})
            }

            })
            
        }
      
     })
    })


console.log(result)

