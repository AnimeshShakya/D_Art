"use client"

import Image from "next/image"
import { Button } from "./ui/button"
import { Heart } from "lucide-react"

interface GalleryItemProps {
  title: string
  price: number
  imageUrl: string
  isNew?: boolean
}

export function GalleryItem({ title, price, imageUrl, isNew }: GalleryItemProps) {
  return (
    <div className="group relative bg-gradient-to-br from-purple-900/10 via-black/5 to-blue-900/10 rounded-lg overflow-hidden">
      <div className="aspect-square relative overflow-hidden">
        <Image
          src={imageUrl}
          alt={title}
          fill
          className="object-cover transition-transform duration-300 group-hover:scale-105"
        />
        <button 
          className="absolute top-3 right-3 p-2 rounded-full bg-black/20 backdrop-blur-sm hover:bg-black/40 transition-colors"
          onClick={() => {}}
        >
          <Heart className="w-5 h-5 text-white" />
        </button>
        {isNew && (
          <span className="absolute top-3 left-3 px-2 py-1 text-xs font-medium bg-[#D81B60] text-white rounded">
            NEW
          </span>
        )}
      </div>
      <div className="p-4">
        <h3 className="text-lg font-medium text-white mb-2">{title}</h3>
        <div className="flex items-center justify-between">
          <p className="text-xl font-bold text-gray-400">${price}</p>
          <Button 
            className="bg-[#D81B60] hover:bg-[#C2185B] text-white"
          >
            Buy Now
          </Button>
        </div>
      </div>
    </div>
  )
}
