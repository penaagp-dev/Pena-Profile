import React from 'react'

const Loading = () => {
    return (
        <div className="flex-col gap-4 w-full flex items-center justify-center">
            <div className="w-14 h-14 border-8 text-blue-500 text-4xl animate-spin border-gray-300 flex items-center justify-center border-t-blue-500 rounded-full"></div>
        </div>
    )
}

export default Loading
